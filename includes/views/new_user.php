<div class="ui container">
  <!-- Logo -->
  <h2 class="ui top attached header">
    <i class="add user icon"></i>Create New User
  </h2>

  <div class="ui attached segment">

    <form class="ui form" method="post" action="api.php">
        <div class="two fields">
        <div class="field">
          <label>First Name</label>
          <input type="text" name="fname" placeholder="First Name">
        </div>

        <div class="field">
          <label>Last Name</label>
          <input type="text" name="lname" placeholder="Last Name">
        </div>
      </div>

        <div class="field">
          <label>E-mail Address</label>
          <input type="email" name="email" placeholder="E-mail Address">
        </div>

        <div class="field">
          <label>Group</label>
          <div class="ui selection dropdown">
            <input type="hidden" name="group">
            <i class="dropdown icon"></i>
            <div class="default text">Choose A Group</div>
            <div class="menu">
              <!-- TODO: Add Loop Here -->
              <div class="item" data-value="a">Group A</div>
              <div class="item" data-value="b">Group B</div>
              <div class="item" data-value="c">Group C</div>
              <div class="item" data-value="d">Group D</div>
            </div>
          </div>
        </div>
        <div class="ui primary fluid animated submit button" tabindex="0">
          <div class="visible content">Submit</div>
          <div class="hidden content">
            <i class="right arrow icon"></i>
          </div>
      </div>
    </form>
  </div>
</div>