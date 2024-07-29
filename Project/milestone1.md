<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Shahbaj Singh (ss4589)</td></tr>
<tr><td> <em>Generated: </em> 7/28/2024 10:12:07 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone1-deliverable/grade/ss4589" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable1/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid email<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable1/task1-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable1/task1-3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>passwords don&#39;t match<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable1/task1-4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email already registered<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable1/task1-5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username taken<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable1/task1-6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>form with valid data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable1/task2-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid data from task 1 (row 2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/7">https://github.com/shahbajsingh/ss4589-IT202-451/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>register.php presents a form to users that compares to information against the remote<br>database to make sure that usernames and emails are uniquue. Passwords are hashed<br>using BCRYPT and so are indecipherable to the database administrator (myself). The sole<br>password constraint ensures that the password is at least 8 characters. This information<br>is collected and compared after the form is submitted. Flash messages help to<br>aid the user experience when filling the form. <br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable2/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password doesn&#39;t match<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable2/task1-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable2/task2-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>login confirmation<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/8">https://github.com/shahbajsingh/ss4589-IT202-451/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Similar to register.php, login.php makes requests to the database after the form is<br>submitted and compares to information already in the database to make sure only<br>registered users are allowed in; this further allows users to access login restricted<br>pages. Flash messages are used to aid the user experience in this facet<br>as well.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable3/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>successful logout<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable3/task2-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>login protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/9">https://github.com/shahbajsingh/ss4589-IT202-451/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Logging out destroys a user&#39;s session. Since there is no inclusion of the<br>partial navigation bar, the session has to be started then destroyed. Destroying the<br>session allows the user to now be restricted from login required pages, because<br>they do not hold the session cookie any longer.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable4/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>not logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable4/task2-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>improper role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable4/task3-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>roles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable4/task4-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>user_roles table (user id 1 is admin)<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable4/task4-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin protected page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/10">https://github.com/shahbajsingh/ss4589-IT202-451/pull/10</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>user_helpers.php in the lib directory holds functions that are ran on any user<br>visiting a login-restricted page such as home.php. If the user&#39;s session does not<br>conform to this they are restricted from there and redirected to a login-unrestricted<br>page.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Role protected pages function the same way as login-restricted pages. user_helpers.php contains code<br>to compare against the Users, Roles, and User_Roles schema that ensure a user<br>without the proper role cannot access a page such as admin.php.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable5/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>nav styled<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable5/task1-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>forms styled<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable5/task1-3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>clean UI<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable5/task1-4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>clean data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/11">https://github.com/shahbajsingh/ss4589-IT202-451/pull/11</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I spent more time than I hoped styling my website with styles.css, tinkering<br>with the color scheme and how forms/buttons behaved. I decided on a cyan<br>color scheme that is consistent across all pages, but which tailors to page<br>specific forms; like profile.php, while it is styled like a form, is not<br>editable until edit_profile.php is accessed.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable6/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error message 1<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable6/task1-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error message 2<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable6/task1-3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error message 3<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable6/task1-5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error message 4<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable6/task2-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>error message 5<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable6/task2-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>validation success message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/12">https://github.com/shahbajsingh/ss4589-IT202-451/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>I used flash messages to enhance the user experience and provide color-coded feedback<br>on whether a feature was successful or resulted in error, along with a<br>brief message that provides more of an alert than a simple echo on<br>the screen.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable7/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>prefilled profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/13">https://github.com/shahbajsingh/ss4589-IT202-451/pull/13</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The information displayed was left &#39;ugly&#39; for a while in plaintext, but I<br>decided to style it as a form; to keep it view only and<br>not editable, I simply did not add form tags, and instead used &lt;label&gt;<br>and &lt;p&gt; tags to display the username and email information. An actual editable<br>form is available if the user clicks &#39;Edit Profile&#39;.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable8/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable8/task1-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable8/task1-3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable8/task1-4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password mismatch<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable8/task1-5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username taken<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable8/task2-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before edit<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone1/deliverable8/task2-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after edit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/14">https://github.com/shahbajsingh/ss4589-IT202-451/pull/14</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>Users are able to edit their information through a form which checks against<br>itself and the database after being submitted to ensure that users are not<br>using already existing usernames or emails. Passwords are also compared against to each<br>other if they are chosen to be changed though it remains optional. <br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://web.njit.edu/~ss4589/it202/Project/login.php">https://web.njit.edu/~ss4589/it202/Project/login.php</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://web.njit.edu/~ss4589/it202/Project/login.php">https://web.njit.edu/~ss4589/it202/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone1-deliverable/grade/ss4589" target="_blank">Grading</a></td></tr></table>