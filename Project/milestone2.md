<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Bank Project</td></tr>
<tr><td> <em>Student: </em> Shahbaj Singh (ss4589)</td></tr>
<tr><td> <em>Generated: </em> 8/4/2024 11:29:43 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone-2-bank-project/grade/ss4589" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Create Accounts table and setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot from the db of the system user (Users table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable1/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>system user in db<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot from the db of the world account (Accounts table)</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable1/task2-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>world account in db<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain the purpose and usage of these two entries and how they relate</td></tr>
<tr><td> <em>Response:</em> <p>the system user and world account handle certain necessary transactions like starting balances<br>and withdrawals and keep these operations separate from actual user accounts to make<br>everything easier to manage and track; they facilitate transactions by acting as a<br>universal intermediary and keep everything centralized<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/16">https://github.com/shahbajsingh/ss4589-IT202-451/pull/16</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Dashboard </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the requested links/navigation</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable2/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>dashboard page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain which ones are working for this milestone</td></tr>
<tr><td> <em>Response:</em> <p>every button on the dashboard works save one– the transfer (part of milestone<br>3); create account, my accounts, deposit, withdraw, and profile are all fully functional,<br>with the leading four being novel additions and the last being a copy<br>over of the profile from milestone 1, but transfer is the only dummy/filler<br>button for now and would facilitate transactions between accounts, likely using the system<br>user + world account as an intermediary again<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/15">https://github.com/shahbajsingh/ss4589-IT202-451/pull/15</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Create a checking Account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the Create Account Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable3/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>create account<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable3/task1-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>account created<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing validation errors and success message</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable3/task2-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>validation<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable3/task2-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>minimum funding<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the transaction generated from the initial deposit (from the DB)</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable3/task3-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>initial deposit (first two rows)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain which account number generation you used and the account creation process including the transaction logic</td></tr>
<tr><td> <em>Response:</em> <p>I used option 1– a random 12-digit account number is generated and checked<br>for uniqueness, then I created the account linked to the user, made an<br>initial deposit from the world account with transactions tracking the transfer, and updated<br>the balances accordingly<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/16">https://github.com/shahbajsingh/ss4589-IT202-451/pull/16</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://web.njit.edu/~ss4589/it202/Project/dashboard.php">https://web.njit.edu/~ss4589/it202/Project/dashboard.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> User will be able to list their accounts </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the user's account list view (show 5 accounts)</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable4/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>account list<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the page is displayed and the data lookup occurs</td></tr>
<tr><td> <em>Response:</em> <p>the &#39;my accounts&#39; page displays a list of a user&#39;s accounts by fetching<br>the account data from the database based on the user&#39;s ID, then it<br>shows the account numbers, types, last modified dates, and balances in a styled<br>table<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/17">https://github.com/shahbajsingh/ss4589-IT202-451/pull/17</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://web.njit.edu/~ss4589/it202/Project/my_accounts.php">https://web.njit.edu/~ss4589/it202/Project/my_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Account Transaction Details </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of an account's transaction history</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable5/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>account db<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable5/task1-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>transaction history<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable5/task1-3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>accounts list<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the lookup and display occurs</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/17">https://github.com/shahbajsingh/ss4589-IT202-451/pull/17</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://web.njit.edu/~ss4589/it202/Project/my_accounts.php">https://web.njit.edu/~ss4589/it202/Project/my_accounts.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Deposit/Withdraw </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a Screenshot of the Deposit Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable6/task1-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>account dropdown with deposit form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a Screenshot of the Withdraw Page (this potentially can be the same page with different views)</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable6/task2-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>account dropdown with withdraw form<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show validation error for negative numbers</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable6/task3-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>negative validation<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Show validation error for withdrawing more than the account contains</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable6/task4-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>overdraft attempt<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable6/task4-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>overdraft error<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Show a success message for deposit and withdraw (2 screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable6/task5-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>deposit<br></p>
</td></tr>
<tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable6/task5-2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>withdrawal<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 6: </em> Show a screenshot of the transaction pairs in the DB for the above tests</td></tr>
<tr><td><table><tr><td><img width="768px" src="/Project/deliverables/milestone2/deliverable6/task6-1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>transaction pairs in db<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 7: </em> Briefly explain how transactions work</td></tr>
<tr><td> <em>Response:</em> <p>transactions work by looking up the account and its current balance, calculating the<br>expected total for the account after the transaction, recording two transaction entries (one<br>for the user account and one for the world) and finally updating these<br>account balances based on the sum of all transactions associated with each account<br></p><br></td></tr>
<tr><td> <em>Sub-Task 8: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/shahbajsingh/ss4589-IT202-451/pull/18">https://github.com/shahbajsingh/ss4589-IT202-451/pull/18</a> </td></tr>
<tr><td> <em>Sub-Task 9: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://web.njit.edu/~ss4589/it202/Project/deposit.php">https://web.njit.edu/~ss4589/it202/Project/deposit.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) </td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone-2-bank-project/grade/ss4589" target="_blank">Grading</a></td></tr></table>