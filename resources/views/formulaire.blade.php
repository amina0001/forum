<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css">
  .formu{
     width: 80%;margin-left: 10%;
    }
    .formu input{
      width:350px;
    }
    
  </style>
</head>
<body>


<!--<div style=""> <div style="position: relative;margin-top: 0px">
  @if (count($errors) > 0)
      
        <div class="alert alert-danger">
            <strong>Whoops! Something went wrong!</strong>

            <br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div> -->
<div>
  
</div>
<div >
<div class="formu">
<form action="/confirm" method="post">
	{{ csrf_field() }}




<tr>
 
 <td>Prenom :<input type="text" name="prenom" class="form-control" value="{{ old('prenom') }} ">
 @if ($errors->has('prenom'))
 <strong style="color: red;">{{ $errors->first('prenom') }}</strong><br>
 @endif
 </td>
</tr>

<tr>
 <td>nom :<input type="text" name="nom" class="form-control" value="{{ old('nom') }} ">
 @if ($errors->has('prenom'))
 <strong style="color: red;">{{ $errors->first('nom') }}</strong><br>
 @endif
 </td>
</tr>
<tr>
  <td>email :<input type="email" name="email" class="form-control" value="{{ old('email') }} ">
 @if ($errors->has('email'))
 <strong style="color: red;">{{ $errors->first('email') }}</strong><br>
 @endif
 </td>
</tr>
 <tr>
  <td>telephone :<input type="text" name="telephone" class="form-control"  value="{{ old('telephone') }}">
 @if ($errors->has('email'))
 <strong style="color: red;">{{ $errors->first('email') }}</strong><br>
 @endif
 </td>
</tr>
 <tr>
  <td>pays : <input type="text" name="pays" class="form-control"  value="{{ old('pays') }}">
 @if ($errors->has('pays'))
 <strong style="color: red;">{{ $errors->first('pays') }}</strong><br>
 @endif
 </td>
</tr>
  <tr>
  <td>Adresse : <input type="text" name="adresse" class="form-control"  value="{{ old('adresse') }}">
 @if ($errors->has('adresse'))
 <strong style="color: red;">{{ $errors->first('adresse') }}</strong><br>
 @endif
 </td>
</tr>
   
  <tr>
  <td>Ville : <input type="text" name="ville" class="form-control"  value="{{ old('ville') }}">
 @if ($errors->has('ville'))
 <strong style="color: red;">{{ $errors->first('ville') }}</strong><br>
 @endif
 </td>
</tr>  

  <tr>
  <td>Code postal : <input type="text" name="code_postal" class="form-control"  value="{{ old('code_postal') }}">
 @if ($errors->has('coode_postal'))
 <strong style="color: red;">{{ $errors->first('code_postal') }}</strong><br>
 @endif
 </td>
</tr>  
 <tr>
  <td>Sujet : <input type="text" name="sujet" class="form-control"  value="{{ old('sujet') }}">
 @if ($errors->has('sujet'))
 <strong style="color: red;">{{ $errors->first('sujet') }}</strong><br>
 @endif
 </td>
</tr>  
  
 <tr>
  <td>Message : <input type="text" name="message" class="form-control"  value="{{ old('message') }}">
 @if ($errors->has('message'))
 <strong style="color: red;">{{ $errors->first('message') }}</strong><br>
 @endif
 </td>
</tr>  
  
 
  <input type="submit" value="enregistrer" class="form-control btn btn-primary " style="width: 10%" >
   <input type="submit" value="Anuller" class="form-control btn btn-danger " style="width: 10%" >
</form>
</div>

 

</div>
</body>
</html>