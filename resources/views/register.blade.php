<html>
    <head>
        <title>Form Sign Up page</title>
    </head>
    
    <body>
        <h1>Buat Account Baru!</h1>

        <h3>Sign Up Form</h3>

        <form action="/welcome" method="POST">
        @csrf
            <label for="fname"> First Name :</label><p>

            </p><input type="text" id="fname" name="fname"><p>

            </p><label for="lname">Last Name :  </label><p>

            </p><input type="text" id="lname" name="lname">
        </form>

        Gender:<p>

        </p><form>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
        </form>

        <form>
            <label for="Nationality">Nationality:</label><p>

            </p>
            <select name="Nationality" id="Nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="Singaporean">Singaporean</option>
                <option value="Malaysian">Malaysian</option>
                <option value="Australian">Australian</option>
            </select>
        </form>

        Language Spoken:<p>

        </p><form>
            <input type="checkbox" id="bahasa" name="bahasa" value="Bahasa">
            <label for="bahasa"></label> Bahasa Indonesia</label><br>
            <input type="checkbox" id="english" name="english" value="english">
            <label for="bahasa"></label> English</label><br>
            <input type="checkbox" id="other" name="other" value="other">
            <label for="bahasa"></label> Other</label><br>

        </form>

        <form action="welcome">
            <label for="Bio">Bio:</label><br><br>
            <textarea id="Bio" name="bio" rows="10" cols="25">


            </textarea><br><br>

            <input type="submit" value="Submit">

        </form>

    </body>
</html>