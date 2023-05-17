@extends('layouts.master')
@section('title', '| Edit Post')
@section('contents')
<div class="container"  style = "height: 70vh;">
  <div class="container" style = "margin-top: 25px; margin-bottom:45px">
    <h4 class="text-center">Welcome to the admin dashboard</h4>
  </div>
  <div class="container" style = "margin-top: 25px; margin-bottom:45px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <h1>What happens when I click the AutoSave toggle and turn it off?</h1>
        <p class="px-4">
        Although you can use the commands above, Microsoft also allows you to change the default behavior by modifying the syntax. Very handy if you want to control how much text is generated.

Use the Syntax =lorem(paragraph,sentence) or =rand(paragraph,sentence)
=lorem(3,9) will create Lorem Ipsum text output with 3 Paragraphs each with 9 Sentences
=rand(4,3) will create Random text output with 4 Paragraphs each with 3 Sentences
        </p>
      </div>
      <div class="col-md-4">
        <h3>I don’t see AutoSave. What’s wrong?</h3>
        <p>
        
It could be a couple of problems:

Are you running the latest update from Microsoft Office? Run the Microsoft Office manual update process to verify you’re fully updated.
Are you an Office 365 subscriber? If not, I highly recommend it. The 1 TB of Onedrive space alone is amazing for backing up files and photos from your mobile device.
If the document is stored on your local computer, AutoSave will be disabled. To enable it, you must save your document to OneDrive, OneDrive for Business or Sharepoint Online.
Make sure you’re not using an older file format like .xls, .ppt or .doc. For example, save your Excel file as a .xlsx and see if that solves the issue.
        </p>
      </div>
    </div>
  </div>

  </div>
</div>

  @endsection()

  @section('footer')
     @parent()
  
  @endsection()