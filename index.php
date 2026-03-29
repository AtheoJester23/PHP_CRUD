<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <section>            
            <h1>Sign-up</h1>
            <form action="includes/formhandler.inc.php" method="post">
                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username" placeholder="Enter username">
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" placeholder="Enter email">
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input type="text" name="password" id="password" placeholder="Enter password">
                </div>
    
                <button>Signup</button>
    
            </form>
        </section>
         
        <hr>

        <section>            
            <h1>Update Account</h1>
            <form action="includes/userupdate.inc.php" method="post">
                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username" placeholder="Enter username">
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" placeholder="Enter email">
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input type="text" name="password" id="password" placeholder="Enter password">
                </div>
    
                <button>Update</button>
    
            </form>
        </section>
        
        <hr>

        <section>            
            <h1>Delete Account</h1>
            <form action="includes/userdelete.inc.php" method="post">
                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username" placeholder="Enter username">
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input type="text" name="password" id="password" placeholder="Enter password">
                </div>
    
                <button>Delete</button>
    
            </form>
        </section>
        
    </main>
</body>
</html>