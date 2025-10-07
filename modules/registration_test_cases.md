# Test Cases – User Registration

**Test Case ID:** TC-REG-02 
**Description:** Register with valid details.  
**Steps:**  
1. Open registration page.  
2. Fill in all required fields (name, email, password, confirm password).  
3. Click Register.  
**Expected Result:** Account is created successfully and user is redirected to login page.

---

**Test Case ID:** TC-REG-03
**Description:** Register with missing required fields.  
**Steps:**  
1. Open registration page.  
2. Leave one or more required fields blank.  
3. Click Register.  
**Expected Result:** Error message “Please fill out all required fields” appears.

---

**Test Case ID:** TC-REG-03  
**Description:** Register with duplicate email.  
**Steps:**  
1. Open registration page.  
2. Enter an email that is already registered.  
3. Click Register.  
**Expected Result:** Error message “Email already registered” appears.
