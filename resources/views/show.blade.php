<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ route('inscribir_paht') }}" method="POST">
<input type="hidden" name="idEstudiante" value="Auth::user()->id">
<input type="hidden" name="idProfe" value="2">


<select name="idMateria">
	

 @foreach ($materias as $verMateria)
 
<option value="{{$verMateria->id}}">{{$verMateria->name}}</option>

  @endforeach
  </select>
  <input type="submit" value="inscribir">
  </form>
</body>
</html>