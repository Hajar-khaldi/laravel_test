<!--<a href="{#{ route('student.details') }#}">Student</a>  -->
 <html>  
 <body>  
 <!--<h1>Name of the Students are : <br>  
 <?php   
//echo $name1;  
// echo "<br>";  
// echo $name2;  
// echo "<br>";  
// echo $name3; ?></h1> 

 <h1>Student id is :   
 <?php   
//echo $id;  
?> 
 
 <h1>Name is :   
 <?php //echo $name; ?>
   
  <h1>Students Details : <br>  
<font size='5' face='Arial'>  -->
<?php   
// echo "student id is :" .$id;  
// echo "<br>";  
// echo "Student name is :" .$name;  
// echo "<br>";  
// echo "Student password is :" .$password; ?>
<!--</h1>  
</font> -->
<font size='5' face='Arial'>  
{{--@if(($id)==1)  
student id is equal to 1.  
@else  
student id is not equal to 1  
@endif   
@unless($id==1)  
student test id is not equal to 1.  
@endunless  --}}
{{-- <title>  
 @hasSection('title')  
 @yield('title') - App Name  
 @else  
 Name  
@endif  
</title>   
value of i :  
@for($i=1;$i<$id;$i++)  
{{$i}}  
@endfor 

@foreach($students as $students)  
{{$students}}<br>  
@endforeach --}}

@while($i < 5 )  
javatpoint  
{{$i++}}  
@endwhile

</font>   

</body>  
</html>