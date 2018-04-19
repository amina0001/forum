<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
.formu{
     width: 80%;margin-left: 1%;
    }
    .formu input{
      width:350px;
    }
</style>
</head>
<body>
<div class="formu">
<form action="/liste" method="get">
 
  id min :
<input type="text" name="id_min" class="form-control" value="{{$id_min}}"><br>
id max:
<input type="text" name="id_max" class="form-control" value="{{$id_max}}">
email:
<input type="emil" name="emails" class="form-control" value="{{$emails}}"><br>
<input type="submit" name="search" class="form-control btn btn-primary" >
</form><br><br>
</div>
<table style="width:60%">
  <tr>
    <th> nom</th>
    <th>prenom</th> 
    <th>sujet</th>
  </tr>
  @foreach($contacts as $contact)
  <tr>
  	
    <td><a href="info/{{ $contact->nom }}">{{ $contact->nom }}</a></td>
    <td><a href="info/{{ $contact->nom }}">{{ $contact->prenom }}</a></td>
    <td><a href="info/{{ $contact->nom }}">{{ $contact->sujet }}</a></td>
  <td style="border: none"><form action="delete/{{ $contact->nom }}" method="get" >
  	<input type="submit" value="delete" class="form-control btn btn-danger " style=" ">
  </form></a></td>
  </tr>
  
  @endforeach

</table>
{{ $contacts->appends(['id_min' => $id_min,'id_max' => $id_max,'emails' => $emails])->links() }}
</body>
</html>