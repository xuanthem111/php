      <h1>Danh Sach User</h1>
     <table class="table table-dark">
         <thead>
         <tr>
             <th scope="col">#</th>
             <th scope="col">Name</th>
             <th scope="col">Sex</th>
         </tr>
         </thead>
         <tbody>
         <?php
         foreach ($data as $value){
             $sex =($value['sex']== userModel::MALE) ? "Nam" : "Nu";
             echo "
              <tr>
                 <th>".$value['id']."</th>
                 <td>".$value['name']."</td>
                  <td>".$sex."</td>
              </tr>";
         }
         ?>
         </tbody>
     </table>
