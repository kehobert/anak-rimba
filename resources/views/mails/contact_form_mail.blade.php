@extends('mail_main')
@section('content')

    <p>
        This is an email from
        <br/><br/>
        Name: {{$contact_person_name}}<br/>
        Email: {{$contact_person_email}}<br/>
        Topic: {{$message_topic}}<br/>
        Message: {{$message_content}}<br/>
    </p>
    <br/><br/><br/><br/>
    <p>Note: This is a system mail from Anakrimba's web Contact Form. Please reply
    this email manually to the respective email mentioned above</p>
@stop