# AI Usage Log

**Platform:** ChatGPT  
**Model:** GPT-5.6 Sol

---

## Interaction 1

### User

how to if i get a value from user input, how do i use that to update the border color with js

### Assistant Summary

Explained how to read an input value with `document.getElementById(...).value` and assign it to an element’s `style.borderColor`. Also explained that the value should usually be read when a button is clicked rather than immediately on page load, and noted that the element needs an existing border style.

---

## Interaction 2

### User

what is wrong with this code:
<head>
        <style>
        input{
            width: 175px;
        }
        p{
            border: solid 0px white;
        }
        </style>

        <h2>Customize webpage</h2>
    </head>
    <body>
        <p id="change">Change this sentence.</p>
        <label>Border R(0-255): </label><input type="number" id="borderred" min="0" max="255"><br>
        <label>Border G(0-255): </label><input type="number" id="bordergreen" min="0" max="255"><br>
        <label>Border B(0-255): </label><input type="number" id="borderblue" min="0" max="255"><br>
        <label>Border Width: </label><input type="number" id="width" min="0"><br>
        <label>Text Color R(0-255): </label><input type="number" id="red" min="0" max="255"><br>
        <label>Text Color G(0-255): </label><input type="number" id="green" min="0" max="255"><br>
        <label>Text Color B(0-255): </label><input type="number" id="blue" min="0" max="255"><br>

        <button onclick="changeColor()">Change Color</button>


        <script>
            function changeColor() {
                var red = document.getElementById("red").value;
                var green = document.getElementById("green").value;
                var blue = document.getElementById("blue").value;
                var width = document.getElementById("width").value;
                var borderred = document.getElementById("borderred").value;
                var bordergreen = document.getElementById("bordergreen").value;
                var borderblue = document.getElementById("borderblue").value;

                document.getElementById("change").style.borderWidth =
                    `${width}`;
                document.getElementById("change").style.color = 
                    `rgb(${red}, ${green}, ${blue})`;
                document.getElementById("change").style.borderColor =
                    `rgb(${borderred}, ${bordergreen}, ${borderblue})`;
            }
        </script>
    </body>

### Assistant Summary

Identified that the border width was missing a CSS unit and explained that `${width}` should include `px`. Also noted that the `<h2>` should technically be inside the `<body>` rather than the `<head>`.

---

## Interaction 3

### User

how do i make an alert

### Assistant Summary

Explained how to use JavaScript’s `alert()` function with literal text, variables, and template literals, including an example inside the existing `changeColor()` function.

---

## Interaction 4

### User

how to check length of a string

### Assistant Summary

Explained that JavaScript strings use the `.length` property and showed how to check the length of a variable and user input, including an example condition for detecting strings longer than a limit.

---

## Interaction 5

### User

what is wrong with this code:
    <head>
        <script>
            function validatePassword () {
                var password1 = document.getElementById("password1").value;
                var password1 = document.getElementById("password2").value;

                if (password1 != password2){
                    alert("Passwords do not match");
                }
                else if (password1.length < 8){
                    alert("Enter a password with atleast 8 characters");
                }
                else {
                    alert("Everything is OK");
                }
            }
        </script>
    </head>
    <body>
        <h1>EECS 348 Lab Three Practice Six</h1>
        <label>First Password: </label><input type="text" id="password1">
        <br>
        <label>Second Password: </label><input type="text" id="password2">
        <br>
        <button onclick="validatePassword()">Validate Your Passwords</button>
    </body>

### Assistant Summary

Identified that `password1` was declared twice and that the second declaration should instead create `password2`. Explained that the current code causes `password2` to be undefined, and also noted that password inputs normally use `type="password"`.

---

## Interaction 6

### User

how would i go about making a multiplication table in php, do i use two for loops. how do i use the user input from the html file.

### Assistant Summary

Explained that a multiplication table can be created with nested `for` loops. Showed how an HTML form can send a value using `method="post"` and a named input, and how PHP can access that value with `$_POST["size"]`. Also explained the corresponding use of `$_GET` if the form uses the GET method.

---

## Interaction 7

### User

what is echo

### Assistant Summary

Explained that PHP’s `echo` outputs text or HTML to the webpage. Also explained how `echo` can print variables and expressions, and that the `.` operator concatenates values in PHP.

---

## Interaction 8

### User

how do i make the rows and columns to put this information in a table

### Assistant Summary

Explained how to generate an HTML table from PHP using `<table>`, `<tr>`, and `<td>` tags. Described using the outer loop for rows and the inner loop for cells, and also showed optional CSS for borders and padding.

---

## Interaction 9

### User

how to make it so that the first row and column are just the number of the row/column

### Assistant Summary

Explained how to start the loops at zero and handle the first row, first column, and top-left corner as special cases. The suggested approach makes the top row display column numbers, the first column display row numbers, and the remaining cells display multiplication results.
