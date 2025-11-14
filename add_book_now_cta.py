import re

files_to_update = [
    'acne-scar.php',
    'aging-skin.php',
    'ballancer-pro.php',
    'breast-augmentation.php',
    'cellulite-reduction.php',
    'chemical-peels.php',
    'collagen-stimulators.php',
    'cosmelan-peel.php',
    'dermaplanning.php',
    'emerald-laser.php',
    'emsculpt-neo.php',
    'forma-plus.php',
    'forma.php',
    'glo2facial.php',
    'hand-rejuvenation.php',
    'hip-augmentation.php',
    'hyperpigmentation.php',
    'laser-hair-reduction.php',
    'laser-radio-frequency.php',
    'led-light-therapy.php',
    'melasma.php',
    'microchannel-infusion-therapy.php',
    'microneedling.php',
    'moles-removal.php',
    'morpheus8.php',
    'non-surgical-butt-lift.php',
    'pores.php',
    'resurfacing.php',
    'rosacea-treatment.php',
    'skinpen.php',
    'stretch-marks.php',
    'tattoo-removal.php'
]

widget_html = '''                <div class="widget widget_banner   " data-bg-src="assets/img/widget/widget-banner-bg.jpg">
                    <div class="widget-banner">
                        <h4 class="title">Book Your Consultation</h4>
                        <div class="banner-text">Get personalized treatment recommendations</div>
                        <a href="contact.php" class="vs-btn">Book Now</a>
                    </div>
                </div>
'''

for filename in files_to_update:
    try:
        with open(filename, 'r', encoding='utf-8') as f:
            content = f.read()

        # Find the closing </aside> tag and insert widget before it
        if '</aside>' in content:
            content = content.replace('</aside>', widget_html + '            </aside>', 1)

            with open(filename, 'w', encoding='utf-8') as f:
                f.write(content)
            print(f'✓ Updated {filename}')
        else:
            print(f'✗ No </aside> tag found in {filename}')

    except Exception as e:
        print(f'✗ Error updating {filename}: {e}')

print('\nCompleted!')
