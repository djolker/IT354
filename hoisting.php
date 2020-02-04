<html>
  <head>
    <title>Hoisting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php include 'inc/header.inc.php' ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4>Hoisting</h4>
        </div>

        <div class="col-md-8 panel">
          <p>Traditionally, variables are instatiated in the order that the script
          defines them by reading and executing code from top to bottom. However,
          JavaScript uses a process called "Hoisting" to instantiate all Variables
          first, then executing any other code. This allows for code to use
          variables that have not been defined yet.</p>

          <code>
            console.log(a);
            <br>
            var a = "Hello World";
          </code>
          <br>
          <p>Even though *a* is defined after the log call, "Hello World" will still
            be output, as the variable *a* had been hoisted by JavaScript at
              beginning of the scripts execution</p>
        </div>
      </div>
    </div>
  </body>
</html>
