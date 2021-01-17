## Features

-   Register: User should be able to register to the system via username, email and password ( also store the users ip address at the time of registration ). - Done
-   Login: User can enter either email or username with password to login to the system ( store the last login time and ip address ).
-   Post a status. ( after logging into the system user can create a status in these we have two options status text and expiration if user selects to expire the status it should automitacally delete after the specified time. ) - done just backend left
-   Delete status ( user can instantly delete the status ) - Done
-   List all status of logged in user.
-   Logout: User can logout from the system (show message like you are successfully logout).

## Must

-   Use Laravel and JWT/Passport/Sanctum to create the token for rest api.
-   Ip and last login time should not be visible in api.
-   Use React with Redux to create the frontend.
-   Should display notification on adding or deleting the status.
-   Proper loaders until data is being fetched from api.

## Bonus

-   Use of route modal binding / resources / pagination / seeders
-   E2E/Unit Test in laravel and react
-   Use of React Lazy and Suspense API.
-   Use of React Hooks
-   Use of any designing library for react ( Reactstrap, Material UI, Ant Design etc.)
