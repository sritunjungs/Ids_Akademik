				<thead>
					<tr>
						<th>Kode Matakuliah</th>
						<th>Nama Matakuliah</th>
						<th>SKS</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymatakuliah = mysqli_query ($konek, "SELECT * FROM matakuliah");
						if($querymatakuliah == false){
							die ("Terdapat Kesalahan : ". mysqli_error($konek));
						}
						while($matakuliah = mysqli_fetch_array($querymatakuliah)){
							echo "
								<tr>
									<td>$matakuliah[Kode_Matakuliah]</td>
									<td>$matakuliah[Nama_Matakuliah]</td>
									<td>$matakuliah[SKS]</td>
									<td>
										<a href='#' onclick='edit_form(this, ".'"matakuliah_modal_edit"'.", ".'"Kode_Matakuliah"'.", ".'"#ModalEditMatakuliah"'.")' id='$matakuliah[Kode_Matakuliah]'>Edit</a> |
										<a href='#' onclick='confirm_delete(\"matakuliah_delete.php?Kode_Matakuliah=$matakuliah[Kode_Matakuliah]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>