<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Convert Class and Property, Camel case to Pascal Case</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="scripts/main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://converter.semihcelikol.com/">CamelCaseToPascalCase</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://semihcelikol.com/camel-case-to-pascal-case/" target="_blank">About <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-9">
        <b>Camel case</b>
        <textarea class="form-control" id="dataCamelCase" name="dataCamelCase" rows="10" cols="50">
public class testData
{
   public string name { get; set; }
   public string surName { get; set; }
}

public class testData2
{
   public string name2 { get; set; }
   public string surName2 { get; set; }
}
        </textarea>
        <p></p>
        <input type="button" value="Convert Pascal Case" onclick="CamelCaseToPascalCase()" class="btn btn-primary" />
    </div>
    <p></p>
    <div class="col-md-9">
    <br>
        <b>Pascal case</b>
        <textarea class="form-control" id="dataPascalCase" name="dataPascalCase" rows="10" cols="50"></textarea>
    </div>
  </div>
</div>
<br>
<div class="container">
<div class="row">
      <div class="col-md-5">
        <h2> Github</h2>
        <p> Github Repositories</p>
        <p><a class="btn btn-secondary" href="https://github.com/semihcelikol/ConvertToPascalCase" role="button">View details »</a></p>
      </div>
      <div class="col-md-5">
        <h2> Blog</h2>
        <p> Blog Post</p>
        <p><a class="btn btn-secondary" href="http://semihcelikol.com/camel-case-to-pascal-case/" role="button">View details »</a></p>
      </div>
    </div>
</div>

<br>
<footer class="container">
  <p>© semihcelikol.com</p>
</footer>
</body>
</html>