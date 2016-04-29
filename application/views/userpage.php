
<?php
$friendsli = "friends_li";
$notfriendsli = "notfriends_li";

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Userpage Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
table , th, td {
  border: 1px solid black;


}
button{
  margin-left: 40px;
}
a{
  text-decoration: underline;
}
</style>

 </head>
   <body>
     <div id="container">
      <h1>Welcome <?php echo ($this->session->userdata("user_session")["name"]) ?>!</h1>
      <a href="/logout">Logout</a>

      <div id="friends_li">
        <table style="width:60%">
  <tr>
    <th>Alias</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>name filler</td>
   <td><a href="/">View Profile</a> <a href="">Remove as Friends</a></td>


  </tr>
  <tr>
      <td>name filler</td>
    <td><a href="/">View Profile</a> <a href="">Remove as Friends</a></td>

  </tr>
  <tr>
      <td>name filler</td>
    <td><a href="/">View Profile</a> <a href="">Remove as Friends</a></td>

  </tr>
</table>

        <h4>Add Friends:</h4>
<div id="notfriendsarea">
<table style="width:40%" name="notfriends">
<tr>
<th>Alias</th>
<th>Action</th>
</tr>
<tr>
  <td><a href="/">name filler</a></td>
  <td><button>Add as Friends</button></td>



</tr>
<tr>
<td><a href="/">name filler</a></td>
<td><button>Add as Friends</button></td>

</tr>
<tr>
<td><a href="/">name filler</a></td>
<td><button>Add as Friends</button></td>

</tr>


</table>


</div>

      </div>








   </body>
   </html>
