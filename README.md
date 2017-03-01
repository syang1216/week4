*** I'm quite confused on the use of checking the HTTP request referral header matching the HOST header, I don't see much reasons how it'd be useful in a practical sense since per HTTP specs it's not required. ***

--------------------------------------------------------------

# Project 4 - Globitek Authentication and Login Throttling

Time spent: 5 hours spent in total

## User Stories

The following **required** functionality is completed:

1\. [&#10003;]  Required: Test for initial vulnerabilities

2\. [&#10003;]  Required: Configure sessions
  * [&#10003;]  Required: Only allow session IDs to come from cookies
  * [&#10003;]  Required: Expire after one day
  * [&#10003;]  Required: Use cookies which are marked as HttpOnly

3\. [&#10003;]  Required: Complete Login page.
  * [&#10003;]  Required: Show an error message when username is not found.
  * [&#10003;]  Required: Show an error message when username is found but password does not match.
  * [&#10003;]  Required: After login, store user ID in session data.
  * [&#10003;]  Required: After login, store user last login time in session data.
  * [&#10003;]  Required: Regenerate the session ID at the appropriate point.

4\. [&#10003;]  Required: Require login to access staff area pages.
  * [&#10003;]  Required: Add a login requirement to *almost all* staff area pages.
  * [&#10003;]  Required: Write code for `last_login_is_recent()`.

5\. [&#10003;]  Required: Complete Logout page.
  * [&#10003;]  Required: Add code to destroy the user's session file after logging out.

6\. [&#10003;]  Required: Add CSRF protections to the state forms.
  * [&#10003;]  Required: Create a CSRF token.
  * [&#10003;]  Required: Add CSRF tokens to forms.
  * [&#10003;]  Required: Compare tokens against the stored version of the token.
  * [&#10003;]  Required: Only process forms data sent by POST requests.
  * [&#10003;]  Required: Confirm request referer is from the same domain as the host.
  * [&#10003;]  Required: Store the CSRF token in the user's session.
  * [&#10003;]  Required: Add the same CSRF token to the login form as a hidden input.
  * [&#10003;]  Required: When submitted, confirm that session and form tokens match.
  * [&#10003;]  Required: If tokens do not match, show an error message.
  * [&#10003;]  Required: Make sure that a logged-in user can use pages as expected.

7\. [&#10003;]  Required: Ensure the application is not vulnerable to XSS attacks.

8\. [&#10003;]  Required: Ensure the application is not vulnerable to SQL Injection attacks.

9\. [&#10003;]  Required: Run all tests from Objective 1 again and confirm that your application is no longer vulnerable to any test.


The following advanced user stories are optional:

* [&#10003;]  Bonus Objective 1: Identify security flaw in Objective #4 (requiring login on staff pages)
  * [&#10003;]  Identify the security principal not being followed. </br>
  		* Least privilege
  * [&#10003;]  Write a short description of how the code could be modified to be more secure. </br>
  		* When a user logs in, he has access to everything, including the power to edit and delete everything, including especially other users. It would be dangerous if an attacker some how hacks 1 user, he'll be able to completely wipe out everything.

* [&#10003;] Bonus Objective 2: Add CSRF protections to all forms in the staff directory

* [&#10003;]  Bonus Objective 3: CSRF tokens only valid for 10 minutes.

* [&#10003;]  Bonus Objective 4: Sessions are valid only if user-agent string matches previous value.

* [&#10003;]  Advanced Objective: Set/Get Signed-Encrypted Cookie
  * [&#10003;]  Create "public/set\_secret\_cookie.php".
  * [&#10003;]  Create "public/get\_secret\_cookie.php".
  * [&#10003;]  Encrypt and sign cookie before storing.
  * [&#10003;]  Verify cookie is signed correctly or show error message.
  * [&#10003;]  Decrypt cookie.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/link/to/your/gif/file.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [Stephen Yang]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.