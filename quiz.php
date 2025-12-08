<!DOCTYPE html>
<html lang="en" class="light"> <!-- Default to light mode -->

<?php include 'quiz-header-links.php'; ?>


<body class="transition-colors duration-300">

    <canvas id="bg-canvas"></canvas>

    <!-- Theme Transition Overlay -->
    <div id="theme-transition-overlay">
        <i id="theme-icon" class="fas fa-sun"></i>
    </div>

    <?php include 'header.php'; ?>


    <!-- <button onclick="toggleTheme()"
        class="w-10 h-10 rounded-full bg-gray-100 dark:bg-slate-800 flex items-center justify-center text-smt-brown dark:text-smt-gold hover:scale-110 transition-transform shadow-sm">
        <i id="theme-toggle-icon" class="fas fa-moon"></i>
    </button> -->

    <main id="root"
        class="flex-1 container mx-auto px-4 py-8 md:py-12 flex items-center justify-center min-h-[700px] relative z-10">
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript for Mobile Menu & Dark Mode -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('active');
        }

        function toggleTheme() {
            const html = document.documentElement;
            const overlay = document.getElementById('theme-transition-overlay');
            const icon = document.getElementById('theme-icon');
            const toggleBtnIcon = document.getElementById('theme-toggle-icon');
            const isDark = html.classList.contains('dark');

            // 1. Prepare Animation Colors and Icons
            // If currently dark, we are going to light (Show Sun)
            // If currently light, we are going to dark (Show Moon)
            const targetIconClass = isDark ? 'fas fa-sun' : 'fas fa-moon';
            const targetColor = isDark ? '#FDB813' : '#F4F6F0'; // Sun Yellow or Moon White
            const targetBg = isDark ? '#F9FAFB' : '#0f172a'; // Target Background

            icon.className = targetIconClass;
            icon.style.color = targetColor;

            // 2. Start Entrance (Rise up)
            overlay.style.opacity = '1';
            overlay.style.pointerEvents = 'all';
            icon.classList.add('animate-rise');

            // 3. Switch Theme halfway through (when screen is obscured implies logic, 
            // but here we rely on the eye being drawn to the icon)
            setTimeout(() => {
                if (isDark) {
                    html.classList.remove('dark');
                    toggleBtnIcon.className = 'fas fa-moon'; // Reset button to show opposite
                    overlay.style.backgroundColor = 'rgba(255,255,255,0.1)'; // Flash effect
                } else {
                    html.classList.add('dark');
                    toggleBtnIcon.className = 'fas fa-sun';
                    overlay.style.backgroundColor = 'rgba(15, 23, 42, 0.1)';
                }
            }, 400);

            // 4. Exit Animation (Fade out)
            setTimeout(() => {
                overlay.style.opacity = '0';
                overlay.style.pointerEvents = 'none';
                icon.classList.remove('animate-rise');
                // Reset icon position for next time (TOP)
                icon.style.transform = 'translateY(-100vh) rotate(180deg)';
            }, 1200);
        }
    </script>

    <!-- REACT APPLICATION LOGIC -->
    <script type="text/babel">
        const { useState, useEffect, useRef } = React;

        // --- CONFIGURATION ---
        // 🚨 Google Apps Script Web App URL
        const GOOGLE_SHEETS_URL = 'https://script.google.com/macros/s/AKfycbxfHEAb7SzPnIRNc0FfzTSPEut8WxdqfDXFxw4CGb9TBeSi2wC1sF5cXANyMTgjBblq/exec';

        // --- GEMINI API INTEGRATION ---
        // API Key is left empty for runtime injection by the canvas environment
        const apiKey = "";

        async function callGemini(contents) {
            if (!apiKey) {
                // If API key is empty, log a warning but proceed to allow runtime injection if available
                console.warn("API Key is empty. Assuming runtime environment will inject.");
            }
            // Use gemini-2.5-flash-preview-09-2025 as the default model
            const url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-09-2025:generateContent?key=${apiKey}`;

            const payloadContents = Array.isArray(contents) ? contents : [{ parts: [{ text: contents }] }];

            // Add system instruction for the chat coach if it's a conversation history array
            const systemInstruction = payloadContents.find(p => p.parts[0].text.includes("You are a helpful, professional dermatology AI assistant"));

            const payload = {
                contents: payloadContents,
                // The system instruction needs to be defined outside of the contents array for the API if used.
                ...(systemInstruction && { systemInstruction: systemInstruction.parts[0] })
            };

            // Remove the system instruction from the contents array before sending if it's present
            const finalContents = systemInstruction ? payloadContents.filter(p => !p.parts[0].text.includes("You are a helpful, professional dermatology AI assistant")) : payloadContents;

            payload.contents = finalContents;

            const MAX_RETRIES = 3;
            for (let i = 0; i < MAX_RETRIES; i++) {
                try {
                    const response = await fetch(url, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(payload)
                    });

                    if (response.ok) {
                        const data = await response.json();
                        // Filter out the initial system prompt from the model response if it was prepended
                        const responseText = data.candidates?.[0]?.content?.parts?.[0]?.text;

                        // Heuristic check to remove the boilerplate response from the model when system instruction is sent
                        if (responseText && responseText.includes("Understood. I am Dr. Shubhshree's AI Assistant.")) {
                            const lines = responseText.split('\n');
                            return lines.length > 1 ? lines.slice(2).join('\n').trim() : "Hello! I'm Dr. Shubhshree's AI Assistant. How can I help you today?";
                        }

                        return responseText || "I couldn't generate a response. Please try again.";
                    } else if (response.status === 429 && i < MAX_RETRIES - 1) {
                        const delay = Math.pow(2, i) * 1000 + Math.random() * 1000;
                        await new Promise(resolve => setTimeout(resolve, delay));
                        continue; // Retry
                    } else {
                        const errorData = await response.json();
                        console.error("Gemini API Error:", response.status, errorData);
                        return `API Error: ${errorData.error?.message || response.statusText}`;
                    }
                } catch (error) {
                    console.error("Connection Error:", error);
                    if (i < MAX_RETRIES - 1) {
                        const delay = Math.pow(2, i) * 1000 + Math.random() * 1000;
                        await new Promise(resolve => setTimeout(resolve, delay));
                        continue; // Retry
                    }
                    return "Connection error. Please check your internet.";
                }
            }
            return "Failed to get a response after multiple retries.";
        }

        // --- ICONS (Lucide Icons) ---
        const Icons = {
            Sun: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><circle cx="12" cy="12" r="4" /><path d="M12 2v2" /><path d="M12 20v2" /><path d="m4.93 4.93 1.41 1.41" /><path d="m17.66 17.66 1.41 1.41" /><path d="M2 12h2" /><path d="M20 12h2" /><path d="m6.34 17.66-1.41 1.41" /><path d="m19.07 4.93-1.41 1.41" /></svg>,
            ShieldAlert: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>,
            CheckCircle: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" /><path d="m9 11 3 3L22 4" /></svg>,
            ArrowRight: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>,
            ArrowLeft: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="m12 19-7-7 7-7 7-7" /><path d="M19 12H5" /></svg>,
            RefreshCcw: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" /><path d="M3 3v5h5" /><path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16" /><path d="M16 16h5v5" /></svg>,
            Sparkles: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275-1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L12 3Z" /><path d="M5 3v4" /><path d="M9 3v4" /><path d="M3 9h4" /><path d="M3 5h4" /></svg>,
            Share: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" /><polyline points="16 6 12 2 8 6" /><line x1="12" x2="12" y1="2" y2="15" /></svg>,
            MessageCircle: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" /></svg>,
            X: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="M18 6 6 18" /><path d="m6 6 18 18" /></svg>,
            Info: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><circle cx="12" cy="12" r="10" /><path d="M12 16v-4" /><path d="M12 8h.01" /></svg>,
            Bot: (props) => <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" {...props}><path d="M12 8V4H8" /><rect width="16" height="12" x="4" y="8" rx="2" /><path d="M2 14h2" /><path d="M20 14h2" /><path d="M15 13v2" /><path d="M9 13v2" /></svg>
        };

        const QUESTIONS = [
            { id: 'tzone', text: "It's 2 PM. How does your T-Zone (forehead, nose) feel?", options: [{ label: "Shiny and greasy.", value: "oily", weight: 2 }, { label: "A bit shiny, cheeks dry.", value: "combination", weight: 2 }, { label: "Tight and parched.", value: "dry", weight: 2 }, { label: "Red or itchy.", value: "sensitive", weight: 2 }] },
            { id: 'sun', text: "How does your skin react to direct sun?", options: [{ label: "I tan easily.", value: "oily", weight: 1 }, { label: "I burn first, then tan.", value: "combination", weight: 1 }, { label: "I get red/rashy.", value: "sensitive", weight: 3 }, { label: "I feel dry/crispy.", value: "dry", weight: 2 }] },
            { id: 'pollution', text: "After a day in city traffic, how does your skin feel?", options: [{ label: "Layer of grime/oil.", value: "oily", weight: 2 }, { label: "Dull and lifeless.", value: "dry", weight: 1 }, { label: "Clogged pores.", value: "combination", weight: 2 }, { label: "Stings or itches.", value: "sensitive", weight: 3 }] },
            { id: 'pores', text: "Look closely at your pores. What do you see?", options: [{ label: "Visible all over.", value: "oily", weight: 2 }, { label: "Visible on T-zone only.", value: "combination", weight: 2 }, { label: "Barely visible.", value: "dry", weight: 2 }, { label: "Redness/capillaries.", value: "sensitive", weight: 2 }] }
        ];

        const SKIN_PROFILES = {
            oily: { title: "Oily / Acne-Prone", description: "Your skin produces excess sebum. You have a natural barrier against aging but are prone to shine.", pros: ["Ages slower", "Natural glow", "Resistant to weather changes"], cons: ["Prone to acne", "Makeup slips", "Enlarged pores"], color: "teal" },
            dry: { title: "Dry / Dehydrated", description: "Your skin lacks oil/moisture. It often feels tight and can look dull without care.", pros: ["Small pores", "Matte finish", "Fewer blemishes"], cons: ["Fine lines", "Tightness", "Flakiness"], color: "amber" },
            combination: { title: "Combination", description: "The most common type. Oily T-zone, dry cheeks. Needs a balanced approach.", pros: ["Resilient cheeks", "Balanced oil in some areas"], cons: ["Confusing to treat", "T-zone breakouts", "Patchy oil/dryness"], color: "indigo" },
            sensitive: { title: "Sensitive", description: "Your skin reacts strongly to triggers. It needs gentle, soothing care.", pros: ["Fine texture", "Forces mindfulness of ingredients"], cons: ["Redness", "Sun intolerance", "Prone to irritation"], color: "rose" }
        };

        function App() {
            const [step, setStep] = useState('intro');
            const [currentQuestionIndex, setCurrentQuestionIndex] = useState(0);
            const [scores, setScores] = useState({ oily: 0, dry: 0, combination: 0, sensitive: 0 });
            // Store user's choices for AI context
            const [userChoices, setUserChoices] = useState({});
            const [result, setResult] = useState(null);
            const [userName, setUserName] = useState('');
            const [showDisclaimer, setShowDisclaimer] = useState(true);

            const handleStart = (name) => {
                setUserName(name || 'Guest');
                setStep('quiz');
                setCurrentQuestionIndex(0);
                setScores({ oily: 0, dry: 0, combination: 0, sensitive: 0 });
                setUserChoices({});
            };

            const handleAnswer = (value, weight, label, questionText) => {
                const newScores = { ...scores, [value]: scores[value] + weight };
                setScores(newScores);
                setUserChoices(prev => ({ ...prev, [questionText]: label }));

                if (currentQuestionIndex < QUESTIONS.length - 1) {
                    setCurrentQuestionIndex(prev => prev + 1);
                } else {
                    setStep('loading');
                    // Find the winning skin type based on the highest score
                    const winner = Object.keys(newScores).reduce((a, b) => newScores[a] > newScores[b] ? a : b);
                    setResult(winner);
                    setTimeout(() => {
                        setStep('form');
                    }, 2000); // 2 second mock processing time
                }
            };

            const handleFormSubmit = () => {
                setStep('result');
            };

            return (
                <div className="w-full max-w-xl bg-white dark:bg-smt-glass dark:backdrop-blur-md rounded-2xl shadow-2xl overflow-hidden min-h-[500px] md:min-h-[550px] flex flex-col relative border border-gray-100 dark:border-slate-700 z-20 mx-auto transition-colors duration-300">
                    {showDisclaimer && <DisclaimerModal onConfirm={() => setShowDisclaimer(false)} />}
                    {step === 'intro' && <IntroView onStart={handleStart} />}
                    {step === 'quiz' && <QuizView question={QUESTIONS[currentQuestionIndex]} total={QUESTIONS.length} current={currentQuestionIndex + 1} onAnswer={handleAnswer} onBack={() => setCurrentQuestionIndex(prev => prev - 1)} />}
                    {step === 'loading' && <LoadingView />}
                    {step === 'form' && <FormView userName={userName} skinType={result} userChoices={userChoices} onSubmit={handleFormSubmit} />}
                    {step === 'result' && <ResultView profileKey={result} userName={userName} userChoices={userChoices} onRetake={() => setStep('intro')} />}
                </div>
            );
        }

        function DisclaimerModal({ onConfirm }) {
            return (
                <div className="absolute inset-0 z-50 flex items-center justify-center bg-smt-navy/95 dark:bg-slate-950/95 fade-in p-4 md:p-6 text-center">
                    <div className="bg-white dark:bg-slate-800 rounded-2xl p-6 md:p-8 max-w-sm w-full shadow-2xl relative border dark:border-slate-700">
                        <div className="w-16 h-16 bg-amber-100 dark:bg-amber-900/50 rounded-full flex items-center justify-center mx-auto mb-4 text-amber-600 dark:text-amber-400">
                            <Icons.Info className="w-8 h-8" />
                        </div>
                        <h2 className="text-xl font-bold text-smt-dark dark:text-white font-serif mb-3">Important Disclaimer</h2>
                        <p className="text-gray-600 dark:text-gray-300 text-sm mb-6 leading-relaxed font-sans">
                            This assessment tool uses AI to estimate your skin type. While designed for accuracy, <strong>it is not a medical diagnosis</strong> and results may vary.
                            <br /><br />
                            For maximum accuracy and medical advice, please visit <strong>SMT Skin Clinic</strong> or book an in-person appointment with Dr. Shubhshree.
                        </p>
                        <button
                            onClick={onConfirm}
                            className="w-full bg-smt-brown text-white font-bold py-3 px-4 rounded-lg shadow-md hover:bg-opacity-90 transition-all font-sans"
                        >
                            I Understand
                        </button>
                    </div>
                </div>
            );
        }

        function IntroView({ onStart }) {
            const [name, setName] = useState('');
            return (
                <div className="flex flex-col items-center justify-center h-full text-center p-6 md:p-8 space-y-6 fade-in my-auto bg-gradient-to-b from-white to-gray-50 dark:from-slate-800 dark:to-slate-900 transition-colors duration-300">
                    <div className="smt-logo-circle" style={{ width: '120px', height: '120px', margin: '0 auto 20px', background: 'linear-gradient(135deg, #C9A961 0%, #A67C52 100%)', borderRadius: '50%', display: 'flex', alignItems: 'center', justifyContent: 'center', boxShadow: '0 10px 30px rgba(198, 169, 97, 0.3)' }}>
                        <div style={{ width: '100px', height: '100px', background: '#2C3E50', borderRadius: '50%', display: 'flex', alignItems: 'center', justifyContent: 'center', overflow: 'hidden' }}>
                            <img src="https://smtskinclinic.com/assets/img/logo-subhshree.png" alt="SMT Logo" style={{ width: '70%', height: '70%', objectFit: 'contain' }} />
                        </div>
                    </div>
                    <h1 className="text-3xl md:text-4xl font-bold text-smt-dark dark:text-white font-serif">Discover Your True Skin Type</h1>

                    <p className="text-gray-600 dark:text-gray-300 max-w-md font-sans">Advanced analysis by Dr. Shubhshree Misra. Tailored for Indian skin needs.</p>
                    <input type="text" placeholder="Your Name" value={name} onChange={(e) => setName(e.target.value)} className="w-full max-w-xs px-4 py-3 rounded-lg border border-gray-300 dark:border-slate-600 dark:bg-slate-700 dark:text-white outline-none text-center font-sans focus:border-smt-gold" />
                    <button onClick={() => onStart(name)} className="w-full max-w-xs bg-smt-brown text-white font-semibold py-3 px-8 rounded-lg shadow-lg hover:scale-105 transition-transform">Start Analysis</button>
                </div>
            );
        }

        function QuizView({ question, total, current, onAnswer, onBack }) {
            const progress = Math.round((current / total) * 100);
            return (
                <div className="flex flex-col h-full p-6 md:p-8 fade-in dark:bg-slate-800 transition-colors duration-300">
                    <div className="mb-6 md:mb-8">
                        <div className="flex justify-between text-xs font-bold text-smt-brown dark:text-smt-gold uppercase mb-2"><span>Question {current}/{total}</span><span>{progress}%</span></div>
                        <div className="h-2 w-full bg-gray-100 dark:bg-slate-700 rounded-full"><div className="h-full bg-smt-brown transition-all duration-500" style={{ width: `${progress}%` }}></div></div>
                    </div>
                    <h3 className="text-lg md:text-xl font-bold text-smt-dark dark:text-white mb-6 md:mb-8 font-serif leading-relaxed">{question.text}</h3>
                    <div className="grid gap-3 md:gap-4 mb-auto">
                        {question.options.map((opt, idx) => (
                            <button key={idx} onClick={() => onAnswer(opt.value, opt.weight, opt.label, question.text)} className="text-left p-3 md:p-4 border-2 border-gray-100 dark:border-slate-600 dark:bg-slate-700 dark:hover:border-smt-gold rounded-xl hover:border-smt-brown hover:bg-orange-50 dark:hover:bg-slate-600 transition-all font-sans font-medium text-gray-700 dark:text-gray-200 text-sm md:text-base">
                                {opt.label}
                            </button>
                        ))}
                    </div>
                    {/* Allow navigating back if not the first question */}
                    {current > 1 && <button onClick={onBack} className="mt-6 text-gray-400 dark:text-gray-500 hover:text-smt-dark dark:hover:text-white text-sm flex items-center gap-2">← Back</button>}
                </div>
            );
        }

        function LoadingView() {
            return (
                <div className="flex flex-col items-center justify-center h-full text-center p-8 space-y-6 fade-in dark:bg-slate-800 transition-colors duration-300">
                    <div className="spinner"></div>
                    <h2 className="text-2xl font-bold text-smt-dark dark:text-white font-serif">Analyzing...</h2>
                    <p className="text-gray-600 dark:text-gray-300 text-sm">Processing results with Dr. Shubhshree's AI model...</p>
                </div>
            );
        }

        // --- AI FEATURES COMPONENTS ---

        function AiRoutineGenerator({ skinType, userChoices }) {
            const [loading, setLoading] = useState(false);
            const [routine, setRoutine] = useState(null);

            const handleGenerate = async () => {
                setLoading(true);
                setRoutine(null); // Clear previous routine

                // Enhanced Prompt for Structure and Format
                const prompt = `Act as an expert dermatologist at SMT Skin Clinic. The user has ${skinType} skin. 
                They answered the following to our quiz: ${JSON.stringify(userChoices)}.
                
                Please generate a structured HTML-formatted Morning and Night routine. 
                Use <h4> tags for headings like "Morning Routine (AM)" and "Night Routine (PM)". 
                Use <ul> and <li> tags for the steps. Use <strong> tags for key ingredients.
                
                Focus on ingredients available in the Indian market. Keep it concise (under 200 words total).
                
                IMPORTANT SAFETY: Do not prescribe prescription-only medications (like Tretinoin/Antibiotics). Focus on OTC ingredients (Salicylic acid, Niacinamide, Hyaluronic acid) and lifestyle.
                `;

                const response = await callGemini(prompt);
                setRoutine(response);
                setLoading(false);
            };

            return (
                <div className="bg-gradient-to-r from-orange-50 to-amber-50 dark:from-slate-700 dark:to-slate-800 rounded-xl p-4 md:p-6 border border-orange-100 dark:border-slate-600 shadow-sm mt-6 transition-colors duration-300">
                    <div className="flex items-center gap-3 mb-3">
                        <div className="bg-smt-gold text-white p-2 rounded-lg">
                            <Icons.Sparkles className="w-5 h-5" />
                        </div>
                        <h3 className="font-bold text-smt-dark dark:text-white font-serif text-lg">AI-Powered Routine</h3>
                    </div>

                    {!routine && !loading && (
                        <div className="text-center py-4">
                            <p className="text-sm text-gray-600 dark:text-gray-300 mb-4">Get a customized AM/PM routine based on your quiz answers.</p>
                            <button
                                onClick={handleGenerate}
                                className="bg-smt-dark dark:bg-slate-900 text-white font-medium py-2 px-6 rounded-lg shadow hover:bg-smt-navy transition-colors flex items-center gap-2 mx-auto w-full md:w-auto justify-center"
                            >
                                <Icons.Sparkles className="w-4 h-4" /> ✨ Generate My Routine
                            </button>
                        </div>
                    )}

                    {loading && (
                        <div className="flex flex-col items-center py-4">
                            <div className="spinner w-6 h-6 border-2 mb-2"></div>
                            <p className="text-xs text-gray-500 dark:text-gray-400">Dr. AI is writing your prescription...</p>
                        </div>
                    )}

                    {routine && (
                        <div className="ai-response text-sm text-gray-700 leading-relaxed animate-fade-in bg-white/60 dark:bg-black/20 p-4 rounded-lg border border-white/50 dark:border-white/10">
                            {/* Render safe HTML directly from the refined prompt */}
                            <div dangerouslySetInnerHTML={{ __html: routine }} />
                        </div>
                    )}
                </div>
            );
        }

        function AiChatCoach({ skinType }) {
            const [isOpen, setIsOpen] = useState(false);
            // Initialize chat history with a System Prompt to define persona
            const [chatHistory, setChatHistory] = useState([
                {
                    role: 'model',
                    parts: [{ text: `Hello! I'm Dr. Shubhshree's AI Assistant. I see you have ${skinType} skin. How can I help you today with your skincare journey?` }]
                }
            ]);

            const [input, setInput] = useState('');
            const [isTyping, setIsTyping] = useState(false);
            const chatEndRef = useRef(null);

            // System Instruction acts as the "Personality" anchor
            const systemInstruction = {
                role: 'user',
                parts: [{
                    text: `You are a helpful, professional dermatology AI assistant for SMT Skin Clinic. 
                        The user has ${skinType} skin. Answer their skincare questions concisely (max 2-3 sentences).
                        Use friendly emojis.
                        IMPORTANT: Do not give medical diagnoses. If a user asks about serious conditions (cysts, severe burns, infections), tell them to book a consultation with Dr. Shubhshree immediately.
                        Focus on ingredients, routine tips, and general advice.
                        Start your response with a brief acknowledgement of the user's question.`
                }]
            };

            const handleSend = async (e) => {
                e.preventDefault();
                if (!input.trim() || isTyping) return;

                const userText = input;
                setInput('');
                setIsTyping(true);

                // 1. Update UI immediately
                const userMessage = { role: 'user', parts: [{ text: userText }] };
                const newHistory = [...chatHistory, userMessage];
                setChatHistory(newHistory);

                // 2. Prepare payload with System Instruction + History
                // Prepend the system instruction (as a user message) for context grounding
                const apiContext = [
                    systemInstruction,
                    ...newHistory
                ];

                // 3. Call API
                const responseText = await callGemini(apiContext);

                // 4. Update UI with Response
                setChatHistory(prev => [...prev, { role: 'model', parts: [{ text: responseText }] }]);
                setIsTyping(false);
            };

            useEffect(() => {
                // Scroll to bottom when chat history changes
                if (isOpen && chatEndRef.current) {
                    chatEndRef.current.scrollIntoView({ behavior: "smooth" });
                }
            }, [chatHistory, isOpen, isTyping]);

            if (!isOpen) {
                return (
                    <button
                        onClick={() => setIsOpen(true)}
                        className="w-full mt-4 bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-600 text-gray-600 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-slate-700 font-medium py-3 px-4 rounded-xl flex items-center justify-center gap-2 transition-all shadow-sm"
                    >
                        <Icons.MessageCircle className="w-5 h-5 text-smt-brown dark:text-smt-gold" /> 💬 Chat with Skin Coach
                    </button>
                );
            }

            return (
                <div className="fixed inset-0 z-50 flex items-center justify-center bg-smt-navy/80 p-4 backdrop-blur-sm">
                    <div className="bg-white dark:bg-slate-900 rounded-2xl w-full max-w-md h-[80vh] md:h-[500px] flex flex-col shadow-2xl relative border dark:border-slate-700">
                        {/* Header */}
                        <div className="bg-smt-dark dark:bg-slate-950 text-white p-4 rounded-t-2xl flex justify-between items-center">
                            <div className="flex items-center gap-3">
                                <div className="bg-smt-gold p-1.5 rounded-full"><Icons.Bot className="w-5 h-5" /></div>
                                <div>
                                    <h3 className="font-bold text-sm">Skin Coach AI</h3>
                                    <p className="text-xs text-gray-300">Ask about products, diet & more</p>
                                </div>
                            </div>
                            <button onClick={() => setIsOpen(false)} className="text-gray-300 hover:text-white"><Icons.X className="w-6 h-6" /></button>
                        </div>

                        {/* Messages */}
                        <div className="flex-1 overflow-y-auto p-4 space-y-3 bg-gray-50 dark:bg-slate-900 custom-scrollbar">
                            {chatHistory.map((msg, idx) => (
                                <div key={idx} className={`flex ${msg.role === 'user' ? 'justify-end' : 'justify-start'}`}>
                                    <div className={`max-w-[85%] rounded-xl p-3 text-sm ${msg.role === 'user' ? 'bg-smt-brown text-white rounded-br-none' : 'bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 text-gray-700 dark:text-gray-200 rounded-bl-none shadow-sm'}`}>
                                        {msg.parts[0].text}
                                    </div>
                                </div>
                            ))}
                            {isTyping && (
                                <div className="flex justify-start">
                                    <div className="bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 rounded-xl rounded-bl-none p-3 shadow-sm">
                                        <div className="flex gap-1">
                                            <div className="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                                            <div className="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style={{ animationDelay: '0.2s' }}></div>
                                            <div className="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style={{ animationDelay: '0.4s' }}></div>
                                        </div>
                                    </div>
                                </div>
                            )}
                            <div ref={chatEndRef} />
                        </div>

                        {/* Input */}
                        <form onSubmit={handleSend} className="p-4 border-t border-gray-100 dark:border-slate-800 bg-white dark:bg-slate-900 rounded-b-2xl">
                            <div className="flex gap-2">
                                <input
                                    type="text"
                                    value={input}
                                    onChange={(e) => setInput(e.target.value)}
                                    placeholder="Ask a skincare question..."
                                    className="flex-1 border border-gray-300 dark:border-slate-700 dark:bg-slate-800 dark:text-white rounded-lg px-4 py-2 text-sm focus:outline-none focus:border-smt-gold"
                                />
                                <button type="submit" disabled={!input.trim() || isTyping} className="bg-smt-gold text-white p-2 rounded-lg hover:bg-opacity-90 disabled:opacity-50">
                                    <Icons.ArrowRight className="w-5 h-5" />
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            );
        }

        function ResultView({ profileKey, userName, userChoices, onRetake }) {
            const profile = SKIN_PROFILES[profileKey];
            return (
                <div className="flex flex-col h-full fade-in overflow-y-auto custom-scrollbar dark:bg-slate-800 transition-colors duration-300">
                    <div className="bg-smt-navy dark:bg-slate-900 text-white p-6 md:p-8 text-center">
                        <p className="text-smt-gold font-medium mb-2 font-sans">Great news, {userName}!</p>
                        <h2 className="text-2xl md:text-3xl font-bold font-serif mb-2">{profile.title}</h2>
                        <p className="text-gray-300 text-sm">{profile.description}</p>
                    </div>
                    <div className="p-4 md:p-6 space-y-6">
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div className="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg"><h4 className="text-green-800 dark:text-green-400 font-bold text-sm mb-2">✓ Strengths</h4><ul className="text-xs text-gray-700 dark:text-gray-300 space-y-1">{profile.pros.map(p => <li key={p}>{p}</li>)}</ul></div>
                            <div className="bg-red-50 dark:bg-red-900/20 p-4 rounded-lg"><h4 className="text-red-800 dark:text-red-400 font-bold text-sm mb-2">! Concerns</h4><ul className="text-xs text-gray-700 dark:text-gray-300 space-y-1">{profile.cons.map(c => <li key={c}>{c}</li>)}</ul></div>
                        </div>

                        {/* --- NEW GEMINI AI COMPONENTS --- */}
                        <AiRoutineGenerator skinType={profile.title} userChoices={userChoices} />
                        <AiChatCoach skinType={profile.title} />

                        <div className="bg-smt-navy dark:bg-slate-900 rounded-xl p-6 text-white text-center mt-6">
                            <h3 className="text-xl font-bold font-serif mb-2">Book Consultation</h3>
                            <p className="text-gray-300 text-sm mb-4">Get a personalized routine from Dr. Shubhshree.</p>
                            <a href="https://wa.me/918864877133" target="_blank" className="bg-smt-brown text-white py-2 px-6 rounded-lg font-bold inline-block hover:bg-opacity-90">Book Now</a>
                        </div>
                        <button onClick={onRetake} className="w-full text-center text-gray-400 dark:text-gray-500 text-sm hover:text-smt-dark dark:hover:text-white py-2">Retake Analysis</button>
                    </div>
                </div>
            );
        }

        function FormView({ userName, skinType, userChoices, onSubmit }) {
            const [name, setName] = useState(userName || '');
            const [email, setEmail] = useState('');
            const [phone, setPhone] = useState('');
            const [wantsConsultation, setWantsConsultation] = useState(false);
            const [isSubmitting, setIsSubmitting] = useState(false);
            const [showSuccess, setShowSuccess] = useState(false);
            const [errors, setErrors] = useState({ name: '', email: '', phone: '' });

            // Email validation (optional field)
            const validateEmail = (email) => {
                if (!email) return true; // Optional field
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            };

            // Phone validation (Indian format: 10 digits) - REQUIRED
            const validatePhone = (phone) => {
                if (!phone) return false; // Required field
                const phoneRegex = /^[6-9]\d{9}$/; // Indian mobile: starts with 6-9, 10 digits
                const cleanPhone = phone.replace(/\D/g, ''); // Remove non-digits
                return phoneRegex.test(cleanPhone) && cleanPhone.length === 10;
            };

            // Format phone number as user types
            const formatPhoneNumber = (value) => {
                const cleaned = value.replace(/\D/g, '');
                if (cleaned.length <= 10) {
                    return cleaned;
                }
                return cleaned.slice(0, 10);
            };

            const handleNameChange = (e) => {
                setName(e.target.value);
                // Clear error when user starts typing
                if (errors.name) {
                    setErrors(prev => ({ ...prev, name: '' }));
                }
            };

            const handlePhoneChange = (e) => {
                const formatted = formatPhoneNumber(e.target.value);
                setPhone(formatted);

                // Clear error when user starts typing
                if (errors.phone) {
                    setErrors(prev => ({ ...prev, phone: '' }));
                }
            };

            const handleEmailChange = (e) => {
                setEmail(e.target.value);

                // Clear error when user starts typing
                if (errors.email) {
                    setErrors(prev => ({ ...prev, email: '' }));
                }
            };

            const handleSubmit = async (e) => {
                e.preventDefault();

                // Validation
                let formValid = true;
                let newErrors = { name: '', email: '', phone: '' };

                // Name validation (required)
                if (!name || name.trim().length < 2) {
                    newErrors.name = 'Please enter your full name (at least 2 characters)';
                    formValid = false;
                }

                // Phone validation (required)
                if (!validatePhone(phone)) {
                    newErrors.phone = phone ? 'Please enter a valid 10-digit Indian mobile number (6-9 prefix)' : 'Phone number is required';
                    formValid = false;
                }

                // Email validation (optional)
                if (email && !validateEmail(email)) {
                    newErrors.email = 'Please enter a valid email address';
                    formValid = false;
                }

                setErrors(newErrors);
                if (!formValid) return;


                setIsSubmitting(true);

                // Prepare payload for Google Sheets
                const payload = {
                    name: name.trim(),
                    skinType: skinType,
                    answers: JSON.stringify(userChoices), // Stringify answers for single cell storage
                    email: email || 'Not provided',
                    phone: phone,
                    wantsConsultation: wantsConsultation ? 'Yes' : 'No',
                    timestamp: new Date().toISOString()
                };

                try {
                    // Send to Google Sheets via Apps Script using no-cors mode
                    // NOTE: 'no-cors' mode is required for Google Apps Script Web Apps to avoid CORS errors.
                    // It returns an "opaque" response, so we cannot check response.ok or response.json().
                    // We assume success if the fetch promise resolves.
                    await fetch(GOOGLE_SHEETS_URL, {
                        method: 'POST',
                        mode: 'no-cors',
                        headers: {
                            'Content-Type': 'text/plain;charset=utf-8', // Specific header to prevent preflight OPTIONS check
                        },
                        body: JSON.stringify(payload)
                    });

                    // Show success message
                    setShowSuccess(true);

                    // Proceed to results after brief delay
                    setTimeout(() => {
                        setIsSubmitting(false);
                        onSubmit();
                    }, 1200);
                } catch (error) {
                    console.error("Error saving data:", error);
                    // Even if there's a network error, we proceed to show results to not block the user
                    setShowSuccess(true);
                    setTimeout(() => {
                        setIsSubmitting(false);
                        onSubmit();
                    }, 1200);
                }
            };

            return (
                <div className="flex flex-col h-full p-6 md:p-8 fade-in justify-center dark:bg-slate-800 transition-colors duration-300">
                    {!showSuccess ? (
                        <>
                            <div className="text-center mb-6">
                                <div className="w-16 h-16 bg-gradient-to-br from-smt-gold to-smt-brown rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse-slow">
                                    <Icons.CheckCircle className="w-8 h-8 text-white" />
                                </div>
                                <h2 className="text-2xl md:text-3xl font-bold text-smt-dark dark:text-white font-serif mb-2">Analysis Complete!</h2>
                                <p className="text-gray-600 dark:text-gray-300 text-sm md:text-base mb-4">Enter your details to unlock your personalized skin analysis results.</p>

                                {/* Trust Indicators */}
                                <div className="flex items-center justify-center gap-4 text-xs text-gray-500 dark:text-gray-400 mb-2">
                                    <div className="flex items-center gap-1">
                                        <Icons.CheckCircle className="w-3 h-3 text-green-500" />
                                        <span>AI-Powered Analysis</span>
                                    </div>
                                    <div className="flex items-center gap-1">
                                        <Icons.CheckCircle className="w-3 h-3 text-green-500" />
                                        <span>Personalized Routine</span>
                                    </div>
                                </div>
                            </div>

                            <form onSubmit={handleSubmit} className="space-y-4 max-w-sm mx-auto w-full">
                                <div>
                                    <label className="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Full Name *</label>
                                    <input
                                        type="text"
                                        placeholder="Enter your full name"
                                        required
                                        value={name}
                                        onChange={handleNameChange}
                                        className={`w-full px-4 py-3 border-2 ${errors.name ? 'border-red-500' : 'border-gray-300 dark:border-slate-600'} dark:bg-slate-700 dark:text-white rounded-lg text-sm focus:outline-none focus:border-smt-brown dark:focus:border-smt-gold transition-colors`}
                                    />
                                    {errors.name && (
                                        <p className="text-red-500 text-xs mt-1 flex items-center gap-1">
                                            <Icons.ShieldAlert className="w-3 h-3" />
                                            {errors.name}
                                        </p>
                                    )}
                                </div>
                                <div>
                                    <label className="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Phone Number *</label>
                                    <input
                                        type="tel"
                                        placeholder="9876543210"
                                        required
                                        value={phone}
                                        onChange={handlePhoneChange}
                                        maxLength="10"
                                        className={`w-full px-4 py-3 border-2 ${errors.phone ? 'border-red-500' : 'border-gray-300 dark:border-slate-600'} dark:bg-slate-700 dark:text-white rounded-lg text-sm focus:outline-none focus:border-smt-brown dark:focus:border-smt-gold transition-colors`}
                                    />
                                    {errors.phone && (
                                        <p className="text-red-500 text-xs mt-1 flex items-center gap-1">
                                            <Icons.ShieldAlert className="w-3 h-3" />
                                            {errors.phone}
                                        </p>
                                    )}
                                    <p className="text-xs text-gray-400 dark:text-gray-500 mt-1">For WhatsApp updates and consultation booking</p>
                                </div>
                                <div>
                                    <label className="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Email Address (Optional)</label>
                                    <input
                                        type="email"
                                        placeholder="your.email@example.com"
                                        value={email}
                                        onChange={handleEmailChange}
                                        className={`w-full px-4 py-3 border-2 ${errors.email ? 'border-red-500' : 'border-gray-300 dark:border-slate-600'} dark:bg-slate-700 dark:text-white rounded-lg text-sm focus:outline-none focus:border-smt-brown dark:focus:border-smt-gold transition-colors`}
                                    />
                                    {errors.email && (
                                        <p className="text-red-500 text-xs mt-1 flex items-center gap-1">
                                            <Icons.ShieldAlert className="w-3 h-3" />
                                            {errors.email}
                                        </p>
                                    )}
                                </div>
                                <div className="flex items-start gap-3 p-3 bg-amber-50 dark:bg-amber-900/20 rounded-lg border border-amber-200 dark:border-amber-800">
                                    <input
                                        type="checkbox"
                                        id="consultation-checkbox"
                                        checked={wantsConsultation}
                                        onChange={(e) => setWantsConsultation(e.target.checked)}
                                        className="mt-1 w-4 h-4 text-smt-brown bg-white dark:bg-slate-700 border-gray-300 dark:border-slate-600 rounded focus:ring-smt-gold cursor-pointer"
                                    />
                                    <label htmlFor="consultation-checkbox" className="text-xs text-gray-700 dark:text-gray-300 cursor-pointer">
                                        <span className="font-semibold">I'm interested in a free consultation</span> with Dr. Shubhshree to discuss my personalized skincare routine.
                                    </label>
                                </div>
                                <button
                                    type="submit"
                                    disabled={isSubmitting}
                                    className="w-full bg-smt-brown text-white font-bold py-3 px-6 rounded-lg hover:bg-opacity-90 hover:scale-105 transition-all shadow-lg flex justify-center items-center gap-2 disabled:opacity-70 disabled:cursor-not-allowed disabled:hover:scale-100"
                                >
                                    {isSubmitting ? (
                                        <>
                                            <div className="w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></div>
                                            Processing...
                                        </>
                                    ) : (
                                        <>
                                            <Icons.Sparkles className="w-5 h-5" />
                                            Unlock My Results
                                        </>
                                    )}
                                </button>
                                <div className="flex items-center justify-center gap-2 text-xs text-gray-500 dark:text-gray-400 mt-3">
                                    <Icons.ShieldAlert className="w-4 h-4 text-green-500" />
                                    <span>🔒 Your data is secure with SMT Skin Clinic</span>
                                </div>
                            </form>
                        </>
                    ) : (
                        <div className="text-center fade-in">
                            <div className="w-20 h-20 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <Icons.CheckCircle className="w-12 h-12 text-green-600 dark:text-green-400" />
                            </div>
                            <h3 className="text-xl font-bold text-smt-dark dark:text-white font-serif mb-2">Success!</h3>
                            <p className="text-gray-600 dark:text-gray-300 text-sm">Preparing your personalized results...</p>
                            <div className="mt-4">
                                <div className="w-8 h-8 border-3 border-smt-brown border-t-transparent rounded-full animate-spin mx-auto"></div>
                            </div>
                        </div>
                    )}
                </div>
            );
        }

        const root = ReactDOM.createRoot(document.getElementById('root'));
        root.render(<App />);
    </script>

    <!-- 3D GALAXY BACKGROUND SCRIPT (Using Modules) -->
    <script type="module">
        import * as THREE from 'three';

        // CONFIGURATION: Adjusted for SMT Skin Clinic Theme with enhanced side visibility
        const CONFIG = {
            count: 60000,
            size: 0.02,
            radius: 12, // Increased radius for wider spread
            branches: 6, // More branches for denser knots
            spin: 1.2, // Increased spin for more pronounced spirals
            randomness: 0.8, // Reduced randomness for tighter knots
            randomnessPower: 3, // Higher power for more concentrated clusters
            // Initial Colors (Light Mode)
            insideColor: '#A67C52', // Bronze/Brown
            outsideColor: '#2C3E50' // Dark Navy
        };

        const scene = new THREE.Scene();

        // Camera - Adjusted for better side view of particles
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 100);
        camera.position.set(0, 2, 12); // Moved further back and lower for better side visibility

        // Renderer
        const canvas = document.getElementById('bg-canvas');
        const renderer = new THREE.WebGLRenderer({
            canvas: canvas,
            antialias: true,
            alpha: true
        });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        // Shaders
        const vertexShader = `
            uniform float uTime;
            uniform float uSize;
            uniform vec3 uMouse;
            attribute float aScale;
            varying vec3 vColor;

            void main() {
                vec4 modelPosition = modelMatrix * vec4(position, 1.0);
                
                // Slow rotation
                float angle = atan(modelPosition.x, modelPosition.z);
                float distanceToCenter = length(modelPosition.xz);
                float angleOffset = (1.0 / distanceToCenter) * uTime * 0.1; 
                
                modelPosition.y += sin(uTime * 0.5 + distanceToCenter) * 0.1;

                // Mouse interaction (Repulsion)
                float distToMouse = distance(modelPosition.xz, uMouse.xz);
                float repulsionRadius = 2.5;
                if(distToMouse < repulsionRadius) {
                    vec3 dir = normalize(modelPosition.xyz - vec3(uMouse.x, 0.0, uMouse.z));
                    float force = (repulsionRadius - distToMouse) * 0.3;
                    modelPosition.xyz += dir * force;
                }

                vec4 viewPosition = viewMatrix * modelPosition;
                vec4 projectedPosition = projectionMatrix * viewPosition;
                gl_Position = projectedPosition;
                gl_PointSize = uSize * aScale * (1.0 / -viewPosition.z);
                vColor = color;
            }
        `;

        const fragmentShader = `
            varying vec3 vColor;
            void main() {
                // Circular particle
                float strength = distance(gl_PointCoord, vec2(0.5));
                strength = 1.0 - strength;
                strength = pow(strength, 10.0);
                if(strength < 0.01) discard;
                gl_FragColor = vec4(vColor, strength);
            }
        `;

        // Generate Galaxy
        let geometry = null;
        let material = null;
        let points = null;

        const generateGalaxy = (isDark) => {
            if (points !== null) {
                geometry.dispose();
                material.dispose();
                scene.remove(points);
            }

            geometry = new THREE.BufferGeometry();

            // Adjust density and size based on theme
            const particleCount = 150000; // Increased for more interactivity (120k-180k range)
            const particleSize = isDark ? 0.02 : 0.05;

            const positions = new Float32Array(particleCount * 3);
            const colors = new Float32Array(particleCount * 3);
            const scales = new Float32Array(particleCount * 1);

            // Adaptive Colors
            // Dark Mode: Gold/White
            // Light Mode: Black/Charcoal
            const colorInside = new THREE.Color(isDark ? '#C9A961' : '#1a202c');
            const colorOutside = new THREE.Color(isDark ? '#ffffff' : '#2d3748');

            for (let i = 0; i < particleCount; i++) {
                const i3 = i * 3;
                const radius = Math.random() * CONFIG.radius;
                const spinAngle = radius * CONFIG.spin;
                const branchAngle = (i % CONFIG.branches) / CONFIG.branches * Math.PI * 2;

                const randomX = Math.pow(Math.random(), CONFIG.randomnessPower) * (Math.random() < 0.5 ? 1 : -1) * CONFIG.randomness * radius;
                const randomY = Math.pow(Math.random(), CONFIG.randomnessPower) * (Math.random() < 0.5 ? 1 : -1) * CONFIG.randomness * radius;
                const randomZ = Math.pow(Math.random(), CONFIG.randomnessPower) * (Math.random() < 0.5 ? 1 : -1) * CONFIG.randomness * radius;

                positions[i3] = Math.cos(branchAngle + spinAngle) * radius + randomX;
                positions[i3 + 1] = randomY;
                positions[i3 + 2] = Math.sin(branchAngle + spinAngle) * radius + randomZ;

                const mixedColor = colorInside.clone();
                mixedColor.lerp(colorOutside, radius / CONFIG.radius);

                colors[i3] = mixedColor.r;
                colors[i3 + 1] = mixedColor.g;
                colors[i3 + 2] = mixedColor.b;

                scales[i] = Math.random();
            }

            geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
            geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));
            geometry.setAttribute('aScale', new THREE.BufferAttribute(scales, 1));

            material = new THREE.ShaderMaterial({
                depthWrite: false,
                blending: THREE.AdditiveBlending,
                vertexColors: true,
                vertexShader: vertexShader,
                fragmentShader: fragmentShader,
                uniforms: {
                    uTime: { value: 0 },
                    uSize: { value: 30 * renderer.getPixelRatio() },
                    uMouse: { value: new THREE.Vector3(999, 999, 999) }
                }
            });

            // Adjust base size uniform for density
            material.uniforms.uSize.value = (30 * renderer.getPixelRatio()) * (isDark ? 1 : 1.5);

            points = new THREE.Points(geometry, material);
            scene.add(points);
        };

        // Initialize Galaxy
        const isInitialDark = document.documentElement.classList.contains('dark');
        generateGalaxy(isInitialDark);

        // Listen for Theme Changes
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.type === "attributes" && mutation.attributeName === "class") {
                    const isDark = document.documentElement.classList.contains('dark');
                    generateGalaxy(isDark);
                }
            });
        });
        observer.observe(document.documentElement, { attributes: true });

        // Interaction
        const raycaster = new THREE.Raycaster();
        const raycasterPlane = new THREE.Mesh(
            new THREE.PlaneGeometry(20, 20),
            new THREE.MeshBasicMaterial({ visible: false })
        );
        raycasterPlane.rotation.x = -Math.PI / 2;
        scene.add(raycasterPlane);

        const mouse = new THREE.Vector2();
        window.addEventListener('mousemove', (event) => {
            mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
            mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
        });

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
            // Re-apply size based on theme for responsive update
            const isDark = document.documentElement.classList.contains('dark');
            if (material) material.uniforms.uSize.value = (30 * renderer.getPixelRatio()) * (isDark ? 1 : 1.5);
        });

        // Animation Loop
        const clock = new THREE.Clock();
        const tick = () => {
            const elapsedTime = clock.getElapsedTime();
            if (material) material.uniforms.uTime.value = elapsedTime;

            if (points) points.rotation.y = elapsedTime * 0.05;

            // Mouse Raycasting
            raycaster.setFromCamera(mouse, camera);
            const intersects = raycaster.intersectObject(raycasterPlane);
            if (intersects.length > 0 && material) {
                material.uniforms.uMouse.value.copy(intersects[0].point);
            }

            renderer.render(scene, camera);
            window.requestAnimationFrame(tick);
        };

        tick();
    </script>
</body>

</html>