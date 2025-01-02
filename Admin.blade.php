<!-- <style>
    html{
        font-family: serif, sans-serif;
        text-align: left;
        background-image:url("nissan_gt_r_4k_2-1920x1080.jpg");      /*background-color: cyan;   
        color: black;
        border: 2px;
        border-style: solid;
        border-color: black;*/

  }
       
age{
    border-radius: 
    3px solid ;
}
</style>
<div class="html">

    <h2>Add New User</h2>

    <form action="adduser" method="post">
        @csrf
        <div class="name">
            <h5>Name</h5>
            <label for="name">Name :</label>
            <input type="text" name="username" id="name" placeholder="Enter your name">
        </div> -->
        <style>
            table,th,td{
                padding: 15px;
                border: 3px solid #000;
            }
        </style>
<table>
<tr>
<th>ID</th>
    <th>Name</th>
    <th>email</th>
    <th>Phone</th>
</tr>
        @foreach ($abc as $cab)
        <tr>
        <td>{{ $cab->id }}</td>
            <td>{{ $cab->Name }}</td>
            <td>{{ $cab->Email }}</td>
            <td>{{ $cab->Phone }}</td>
        </tr>
        </table>
        
        @endforeach
    <!-- <div class="chboxuser">
            <h5>User Skill</h5>
            <input type="checkbox" name="skill" value="php" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill" value="Node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill" value="Java" id="java">
            <label for="java">Java</label>

        </div>
        <div class="chboxgen">
           <h5>Gender</h5>
           <input type="radio" name="gender" value="Male" id="Male">
           <label for="Male">Male</label>
           <input type="radio" name="gender" value="Female" id="Female">
           <label for="Female">Female</label>
           </div>
        <div class="city">
            <h5>City</h5>
            <select name="city">
                <option value="select">select</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Bangalore">Bangalore</option>

            </select>
            <div class="Age">
                <h5>Age</h5>
                <input type="number" name="Age" min="16" max="100">
            </div>
            <button>Add New User</button>
        </div>   
    </form>
</div> -->
