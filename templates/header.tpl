<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Store</title>
    <link rel="stylesheet" href="{BASE_URL}/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home">{$title}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="home">Products <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="categorys">Categorys</a>
            </li>
          </ul>
          <ul class="navbar-nav">
              {if isset($smarty.session.EMAIL_USER)}
                <li class="nav-item">
                  <a class="nav-link" href="logout">{$smarty.session.EMAIL_USER}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout">Log out</a>
                </li>
              {else}
                <li class="nav-item">
                  <a class="nav-link active" href="login">Log In</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="register">Register</a>
                </li>
              {/if}
          </ul>
        </div>
      </nav>          
    </header>
    <main w-50 m-auto mt-5>
  