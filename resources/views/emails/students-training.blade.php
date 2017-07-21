<!DOCTYPE html>
<html>
<head></head>
<body style='background: white; color: #222'>
<table width='600px' border='0'>
		<thead>
		<tr><th colspan='2'><img style='height:50px;' src='{{url(config('whyte.project.logo'))}}'><h4>Contact Enquiry from {{config('whyte.project.name')}} Website</h4></th></tr>
		</thead>
		<tbody>
			<tr><td>Name</td><td>{{$request->first_name}} {{$request->last_name}}</td></tr>
			<tr><td>Subject</td><td>{{$request->subject}}</td></tr>
			<tr><td>Qatar ID</td><td>{{$request->qatar_id}}</td></tr>
			<tr><td>Date Of Birth</td><td>{{$request->dob}}</td></tr>
			<tr><td>Date Of Birth</td><td>{{$request->dob}}</td></tr>
			<tr><td>Phone</td><td>{{$request->phone}}</td></tr>
			<tr><td>Email</td><td>{{$request->email}}</td></tr>
			<tr><td>High School Attended</td><td>{{$request->high_school_attended}}</td></tr>
			<tr><td>High School Results</td><td>{{$request->high_school_results}}</td></tr>
			<tr><td>University Name</td><td>{{$request->university_name}}</td></tr>
			<tr><td>Year Of Study</td><td>{{$request->year_of_study}}</td></tr>
			<tr><td>Year Of Graduation</td><td>{{$request->year_of_graduation}}</td></tr>
			<tr><td>Results Achieved</td><td>{{$request->results_achieved}}</td></tr>
			<tr><td>Predicted Graduation Results</td><td>{{$request->predicted_graduation_results}}</td></tr>
		</tbody>
	</table>
</body>
</html>