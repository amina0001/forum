<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
<table style="width:60%">
  <tr>
    <th> nom</th>
    <th>prenom</th> 
    <th>email</th>
    <th>telephone</th> 
    <th>adresse</th>
    <th>ville</th> 
    <th>code postal</th>
    <th>sujet</th>
     <th>message</th>
  </tr>
  <tr>

    <td>{{ $contacts->nom }}</td>
    <td>{{ $contacts->prenom }}</td>
    <td>{{ $contacts->email }}</td>
     <td>{{ $contacts->telephone }}</td>
     <td>{{ $contacts->adresse }}</td>
      <td>{{ $contacts->ville }}</td>
      <td>{{ $contacts->code_postal }}</td>
    <td>{{ $contacts->sujet }}</td>
     <td>{{ $contacts->message }}</td>
   
  </tr>

</body>
</html>