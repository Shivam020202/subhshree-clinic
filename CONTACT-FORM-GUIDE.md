# SMT Skin Clinic - Contact Form Documentation

## Form Configuration

### Web3Forms Integration

- **Service:** Web3Forms (https://web3forms.com)
- **Access Key:** `8896dde3-76b7-4bc0-8a62-68a07cb4a523`
- **Submission Endpoint:** `https://api.web3forms.com/submit`
- **Method:** POST

---

## Form Fields & Validation

### Section 1: About You

#### 1. Full Name

- **Field Name:** `full_name`
- **Type:** Text input
- **Required:** ✅ Yes
- **Validation:** Minimum 3 characters
- **Placeholder:** "FULL NAME\*"

#### 2. Age

- **Field Name:** `age`
- **Type:** Number input
- **Required:** ✅ Yes
- **Validation:** Between 16 and 80
- **Placeholder:** "AGE\*"

#### 3. Gender

- **Field Name:** `gender`
- **Type:** Dropdown (Select)
- **Required:** ⬜ No (Optional)
- **Options:**
  - Male
  - Female
  - Prefer not to say
  - Other
- **Default:** "Gender (Optional)"

#### 4. City & Locality

- **Field Name:** `city_locality`
- **Type:** Text input
- **Required:** ✅ Yes
- **Placeholder:** "CITY & LOCALITY\* (e.g., Lucknow - Gomti Nagar)"
- **Example:** "Lucknow - Gomti Nagar"

#### 5. Mobile Number

- **Field Name:** `mobile`
- **Type:** Tel input
- **Required:** ✅ Yes
- **Validation:**
  - Pattern: `[6-9]\d{9}`
  - Must be a 10-digit Indian mobile number
  - Must start with 6, 7, 8, or 9
- **Error Message:** "Enter a valid 10-digit Indian mobile number"
- **Placeholder:** "MOBILE NUMBER\* (10 digits)"

#### 6. Email

- **Field Name:** `email`
- **Type:** Email input
- **Required:** ⬜ No (Optional)
- **Validation:** Must be a valid email format
- **Placeholder:** "EMAIL (Optional)"

---

### Section 2: Your Skin/Hair Concern

#### 7. What brings you to SMT Skin Clinic?

- **Field Name:** `concerns[]` (array)
- **Type:** Checkboxes (multiple selection)
- **Required:** ✅ Yes (at least one must be selected)
- **Options:**
  1. Acne or acne scars
  2. Anti-aging / fine lines & wrinkles
  3. Pigmentation / uneven skin tone
  4. Hair fall or hair thinning
  5. Laser hair removal
  6. Body contouring / weight loss
  7. Skin glow / maintenance
  8. **Other:** (with text field)

**Other Field:**

- **Field Name:** `concern_other_text`
- **Type:** Text input
- **Conditional:** Only visible when "Other" checkbox is selected
- **Validation:** Required if "Other" is checked

---

## Form Behavior

### Client-Side Validation

1. **Full Name:** Minimum 3 characters (HTML5 validation)
2. **Age:** Must be between 16-80 (HTML5 validation)
3. **Mobile:** Must match pattern `[6-9]\d{9}` (Regex validation)
4. **Email:** Valid email format (HTML5 validation) - Optional
5. **Concerns:** At least one checkbox must be selected (JavaScript validation)
6. **Other Text:** Required if "Other" checkbox is checked (JavaScript validation)

### Submission Process

1. User fills out the form
2. Client-side validation runs on submit
3. If validation passes:
   - Submit button shows "Sending..."
   - Form data sent to Web3Forms API
4. On success:
   - Green success message displayed
   - Form resets automatically
5. On error:
   - Red error message displayed
   - User can retry submission

---

## Success & Error Messages

### Success Message

```
Thank you! Your consultation request has been received.
We will contact you shortly.
```

- **Color:** Green (#d4edda background, #155724 text)

### Error Message

```
Oops! Something went wrong. Please try again or
call us at +91-8864877133
```

- **Color:** Red (#f8d7da background, #721c24 text)

---

## Email Notifications

### What You'll Receive

When a form is submitted, you'll receive an email at the address configured in your Web3Forms account with:

- **Subject:** "New Consultation Request - SMT Skin Clinic"
- **Fields:**
  - Full Name
  - Age
  - Gender
  - City & Locality
  - Mobile Number
  - Email (if provided)
  - Selected Concerns (comma-separated list)
  - Other Concern Text (if applicable)

---

## Testing the Form

### Test Scenarios

1. **Valid Submission:**

   - Full Name: "Rahul Sharma"
   - Age: 28
   - Gender: Male
   - City: "Lucknow - Gomti Nagar"
   - Mobile: 9876543210
   - Email: test@example.com
   - Concerns: Check "Acne or acne scars"
   - **Expected:** Success message

2. **Invalid Mobile:**

   - Mobile: 1234567890 (starts with 1)
   - **Expected:** Validation error

3. **No Concern Selected:**

   - Fill all fields but don't check any concern
   - **Expected:** Alert - "Please select at least one concern"

4. **Other without text:**
   - Check "Other" but leave text field empty
   - **Expected:** Alert - "Please specify your concern"

---

## Accessing Form Submissions

### Web3Forms Dashboard

1. Go to: https://web3forms.com
2. Log in to your account
3. Navigate to "Forms" section
4. View all submissions with timestamps
5. Export data as CSV/Excel if needed

### Alternative: Email Notifications

All submissions will be automatically forwarded to your registered email address.

---

## Security Features

✅ **HTTPS Only:** Form submits over secure connection  
✅ **Spam Protection:** Built-in spam filtering by Web3Forms  
✅ **Input Validation:** Client-side validation prevents invalid data  
✅ **Sanitization:** Web3Forms sanitizes all inputs server-side

---

## Customization Options

### Change Success Redirect (Optional)

Currently set to: `https://web3forms.com/success`

To redirect to your own thank-you page:

```html
<input
  type="hidden"
  name="redirect"
  value="https://yourdomain.com/thank-you.php"
/>
```

### Add Honeypot (Anti-Spam)

Add this hidden field:

```html
<input type="checkbox" name="botcheck" class="hidden" style="display: none;" />
```

### Custom Email Template

Configure in Web3Forms dashboard under Settings → Email Template

---

## Troubleshooting

### Form Not Submitting?

- Check browser console for JavaScript errors
- Verify Web3Forms access key is correct
- Ensure internet connection is active

### Not Receiving Emails?

- Check spam/junk folder
- Verify email address in Web3Forms account
- Check Web3Forms dashboard for submission logs

### Validation Not Working?

- Ensure JavaScript is enabled in browser
- Check that all required fields have `required` attribute
- Verify regex pattern for mobile number

---

## Mobile Responsiveness

The form is fully responsive and tested on:

- ✅ Desktop (1920px+)
- ✅ Laptop (1366px - 1920px)
- ✅ Tablet (768px - 1366px)
- ✅ Mobile (320px - 768px)

---

## Browser Compatibility

Tested and working on:

- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

---

**Last Updated:** October 16, 2025  
**Form Version:** 2.0  
**Integration:** Web3Forms API
