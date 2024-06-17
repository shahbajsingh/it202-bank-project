<table><tr><td> <em>Assignment: </em> IT202 JavaScript and CSS Challenge</td></tr>
<tr><td> <em>Student: </em> Shahbaj Singh (ss4589)</td></tr>
<tr><td> <em>Generated: </em> 6/16/2024 11:07:20 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-javascript-and-css-challenge/grade/ss4589" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ul><li>Reminder: Make sure you start in dev and it's up to date<ol><li><code>git checkout dev</code></li><li><code>git pull origin dev</code></li><li><code>git checkout -b M3-Challenge-HW</code></li></ol></li></ul><ol><li>Create a copy of the template given here:&nbsp;<a href="https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c">https://gist.github.com/MattToegel/77e4b66e3c73c074ea215562ebce717c</a></li><li>Implement the changes defined in the body of the code</li><ol><li>Hint: You may want to use your browser's developer tools to see the script that's pulled in, this may help with a few challenges</li></ol><li><strong>Do not</strong>&nbsp;edit anything where the comments tell you not to edit, you will lose points for not following directions</li><li>Make changes where the comments tell you (via TODO's or just above the lines that tell you not to edit below)<ol><li><strong>Hint</strong>: Just change things in the designated&nbsp;<code>&lt;style&gt;</code>&nbsp;and&nbsp;<code>&lt;script&gt;</code>&nbsp;tags</li><li><strong>Important</strong>: The function that drives one of the challenges is&nbsp;<code>updateCurrentPage(str)</code>&nbsp;which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.</li></ol></li><li>Create a branch called M3-Challenge-HW if you haven't yet</li><li>Add this template to that branch (git add/git commit)</li><li>Make a pull request for this branch once you push it</li><li>You may manually deploy the HW branch to dev to get the evidence for the below prompts</li><li>Create a new file&nbsp;<strong>m3_submission.md</strong>&nbsp;file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)</li><li>Add, commit, and push the submission file</li><li>Close the pull request by merging it to dev (double-check all looks good on dev)</li><li>Manually create a new pull request from dev to prod (i.e., base: prod &lt;- compare: dev)</li><li>Complete the merge to deploy to production</li><li>Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission</li></ol><style>` and `<script>` tags
    2. **Important**: The function that drives one of the challenges is `updateCurrentPage(str)` which takes 1 parameter, a string of the word to display as the current page. This function is not included in the code of the page, along with a few other things, are linked via an external js file. Make sure you do not delete this line.  
5. Create a branch called M3-Challenge-HW if you haven't yet
6. Add this template to that branch (git add/git commit)
7. Make a pull request for this branch once you push it
8. You may manually deploy the HW branch to dev to get the evidence for the below prompts
9. Create a new file **m3_submission.md** file in the hw branch and fill it with the output generated from this page (be careful not to paste more than once)
10. Add, commit, and push the submission file
11. Close the pull request by merging it to dev (double-check all looks good on dev)
12. Manually create a new pull request from dev to prod (i.e., base: prod <- compare: dev)
13. Complete the merge to deploy to production
14. Submit the direct link of the m3_submission.md from the prod branch to Canvas for this submission
</style></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Completed Challenge Screenshots </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> 5 Screenshots based on the checklist items for this task</td></tr>
<tr><td><table><tr><td><img width="768px" src="/M3/scr1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>primary page<br></p>
</td></tr>
<tr><td><img width="768px" src="/M3/scr2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>login link<br></p>
</td></tr>
<tr><td><img width="768px" src="/M3/scr3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>register link<br></p>
</td></tr>
<tr><td><img width="768px" src="/M3/scr4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile link<br></p>
</td></tr>
<tr><td><img width="768px" src="/M3/scr5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>logout link<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Explain Solutions (Grader use this section to determine completion of each challenge) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly explain how you made the navigation horizontal</td></tr>
<tr><td> <em>Response:</em> <p>I created a selector for nav ul to mutate the unordered list items<br>tagged with &lt;nav&gt; and added the &#39;display&#39; property with value &#39;flex&#39;, which enables<br>the flexbox layout whose default style orders items in a row (horizontally).<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how you remove the navigation list item markers</td></tr>
<tr><td> <em>Response:</em> <p>In the same nav ul selector, I added the property &#39;list-style-type&#39; with value<br>&#39;none&#39;.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you gave the navigation a background</td></tr>
<tr><td> <em>Response:</em> <p>In the same nav ul selector, I simply added the property-value pair &#39;background-color:<br>lightskyblue&#39;, giving the navigation a background of my liking.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how you made the links (or their surrounding area) change color on mouseover/hover</td></tr>
<tr><td> <em>Response:</em> <p>I used a pseudo element to change how elements in the navigation bar<br>(tagged with &lt;a&gt;) would respond using the &#39;hover&#39; element, giving them a new<br>&#39;color&#39; property with value &#39;red&#39;.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you changed the challenge list bullet points to checkmarks (✓)</td></tr>
<tr><td> <em>Response:</em> <p>This one was slightly more difficult, I will explain how I excluded the<br>nav bar from these changes in the relevant sub-task, but to change the<br>unordered list bullet points, I used the pseudo element &#39;::before&#39;&nbsp; and added a<br>&#39;content&#39; property with the value being a check mark.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain how you made the first character of the h1 tags and anchor tags uppercased</td></tr>
<tr><td> <em>Response:</em> <p>I used the &#39;text-transform&#39; property in the nav a and h1 selectors, giving<br>it the value &#39;capitalize&#39; to transform the text into a capitalized version (I<br>tried uppercase, but it would uppercase the entire text).<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain/describe your custom styling of your choice</td></tr>
<tr><td> <em>Response:</em> <p>I added a body selector which changed the background color of the website<br>because I gave it a property &#39;background-color&#39; with the value &#39;lightgoldenrodyellow&#39;; my website<br>therefore has a light yellow tinge with a sky blue nav bar.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Briefly explain how the styling for the challenge list doesn't impact the navigation list</td></tr>
<tr><td> <em>Response:</em> <p>This was harder to deduce, but I found that, when creating the content<br>property to add check marks, before naming the pseudo element to be changed<br>(i.e. li::before), when naming the selector (ul) I had to add &#39;not(nav ul)&#39;,<br>requiring a separate selector for it, otherwise the nav bar items were left<br>with check marks as well. This syntax excludes the nav bar from the<br>changes made in that selector to all other items matching &lt;ul&gt;.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 9: </em> Briefly explain how you updated the content of the h1 tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>I had to create the function &#39;updateCurrentPage&#39; and create an event listener on<br>the page– for each link in the nav bar, I created an event<br>listener that responds to clicks and prevents the user from being navigated to<br>the href of that name (login, profile, etc.), instead calling &#39;updateCurrentPage&#39;. In the<br>&#39;updateCurrentPage&#39; function which was called by the event listener, the function took as<br>parameter the text data of the link (i.e. its name as a string)<br>and changed the value of elements tagged with &lt;h1&gt; to that string text,<br>as well as the document&#39;s title.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 10: </em> Briefly explain how you updated the content of the title tag with the link text</td></tr>
<tr><td> <em>Response:</em> <p>In the &#39;updateCurrentPage&#39; function which was called by the event <br>listener, the function<br>took as parameter the text data of the link (i.e.<br> its name as<br>a string) and changed the value of elements tagged with <br>&lt;h1&gt; to that<br>string text, as well as the document&#39;s title.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Comment briefly talking about what you learned and/or any difficulties you encountered and how you resolved them (or attempted to)</td></tr>
<tr><td> <em>Response:</em> <p>Finding out the appropriate properties to add to the CSS selectors was difficult<br>for some of the tasks, such as the one excluding the nav bar,<br>but W3Schools provided good explanations and examples of CSS that I could use<br>to get what I wanted. The JavaScript itself was arguably the toughest part,<br>harder than the CSS, but once I understood what was happening on the<br>page (when clicking the nav bar links) it took just a short while<br>of trial and error until I was able to get the text processing<br>as I wanted, in the function I had to make within the script<br>tags.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your pull request (hw branch to dev only)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/4">https://github.com/shahbajsingh/ss4589-IT202-451/pull/4</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to your solution html file from prod (again you can assume the url at this point)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://web.njit.edu/~ss4589/it202/hw3/challenge.html">https://web.njit.edu/~ss4589/it202/hw3/challenge.html</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-javascript-and-css-challenge/grade/ss4589" target="_blank">Grading</a></td></tr></table>