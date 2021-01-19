      <h1>Danh Sach Product</h1>
     <table class="table table-dark">
         <thead>
         <tr>
             <th scope="col">#</th>
             <th scope="col">Name</th>
             <th scope="col">Price</th>
         </tr>
         </thead>
         <tbody>
         <?php
         foreach ($data as $value){
             echo "
              <tr>
                 <th>".$value['id']."</th>
                 <td>".$value['name']."</td>
                  <td>".$value['price']."</td>
              </tr>";
         }
         ?>
         </tbody>
     </table>
