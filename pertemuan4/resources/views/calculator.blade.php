<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <h1>Calculator</h1>
    <form action="calculator" method="post">
      @csrf
      <input type="text" name="angka1">
      <input type="text" name="angka2">
      <input type="submit" value="+" name="submit"></input>
      <input type="submit" value="-" name="submit"></input>
      <input type="submit" value="*" name="submit"></input>
      <input type="submit" value="/" name="submit"></input>
    </form>

    @if(isset($hasil))
      Hasil = {{$hasil}}
    @endif
  </body>
</html>
