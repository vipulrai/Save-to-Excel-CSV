<form action="post.php" method="post">
   <h3 align="center">Contact Form</h3>
   <br />     
   <div class="form-group">
      <label>Enter Name</label>
      <input type="text" name="name" placeholder="Enter Name" class="form-control" value="" />
   </div>
   <div class="form-group">
      <label>Enter Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email" value="" />
   </div>
   <div class="form-group">
      <label>Enter Subject</label>
      <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="" />
   </div>
   <div class="form-group">
      <label>Enter Message</label>
      <textarea name="message" class="form-control" placeholder="Enter Message"></textarea>
   </div>
   <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
   </div>
</form>