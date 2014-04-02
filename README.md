Bonfire-Google_Authenticator
============================

A module the replace the user module that allows 2-step verification with Google Authenticator


This module is intended to be used by people wanting to add extra security to there users accounts by adding Google Authentictor to them.

A user can go to their profile (NOT AVALIABLE in the admin profile). Add can turn on or off Google Authentication for there account.

This module is as complete as needed. By that I mean functionally it works stright out the box, however, visually it can be improved and you may want to add features such as enforce Google Authentication on all accounts or even enforce Google Authentication on roles (Some ideas I had on the modules future). This is up to you the user how you want to adjust it to your needs

I will keep this module up-to-date when I make changes.

Installation
============================
1. Move the folder 'users' to the folder 'application/modules/' in your bonfire install
(NOTE: you will see an auth php warning appear but just ignore as it disappears once you have done the migration)
2. Next go to your migrations (Developer -> Database tools -> Migration) and install the latest DB migration.
3. You are done!

Any suggestions are welcome

