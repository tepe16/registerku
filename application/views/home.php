<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<?php 
 $this->load->library('session');
 $login_session = $this->session->userdata('userlogin');
 //$username = $this->session->userdata('userlogin');
 
?>

<h3><b>Hello ,<?php echo $login_session['Email'];?></b> <a href="<?= site_url('welcome/logout') ?>" ><button  style="float: right;" type="submit" class="btn btn-success">LOGOUT</button></h3></a><hr/>


<h2>LIST USER</h2>

<table>
  <tr>
    <th>Title</th>
    <th>Firstname</th>
    <th>Lastname</th>
	<th>Image</th>
	<th>Action</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
	<td >Germany</td>
	<td><button type="button" class="btn btn-success">UPDATE</button> | <button type="button" class="btn btn-danger">DELETE</button></td>
  </tr>
</table>

</body>
</html>

