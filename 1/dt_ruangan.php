				<thead>
					<tr>
						<th>Kode Ruangan</th>
						<th>Ruangan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryruangan = mysqli_query ($konek, "SELECT * FROM ruangan");
						if($queryruangan == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($ruangan = mysqli_fetch_array ($queryruangan)){
							
							echo "
								<tr>
									<td>$ruangan[Kode_Ruangan]</td>
									<td>$ruangan[Nama_Ruangan]</td>
									<td>
										<a href='#' onclick='edit_form(this, ".'"ruangan_modal_edit"'.",  ".'"Kode_Ruangan"'.", ".'"#ModalEditRuangan"'.");' id='$ruangan[Kode_Ruangan]'>Edit</a> |
										<a href='#' onclick='confirm_delete(\"ruangan_delete.php?Kode_Ruangan=$ruangan[Kode_Ruangan]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>