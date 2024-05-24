<?php include "../connection.php";
include 'include/header.php';
include 'include/sidebar.php' ; 

function format_uang($angka)
{
    return number_format($angka, 0, ",", ".");
}

// mac
// $baseUrl = 'http://localhost/toyota/admin/config';
// linux
$baseUrl = 'http://toyota.test/admin';

?>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cards</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Cards</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
          Add
        </button>
        <div class="modal fade" id="basicModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add car</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="config/add-cars.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="e.g. New Corolla Altis Hybrid">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Price</label>
                    <input type="number" name="price" class="form-control" placeholder="e.g. 200.000.000">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Photo</label>
                    <input type="file" name="photo" class="form-control" placeholder="Enter Photo">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Type</label>
                    <select name="type" class="form-select">
                      <option value="mpv">MPV</option>
                      <option value="suv">SUV</option>
                      <option value="hatchback">Hatchback</option>
                      <option value="electrified">Electrified</option>
                      <option value="sports">Sports</option>
                      <option value="sedan">Sedan</option>
                      <option value="commercial">Commercial</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-check-label" for="gridCheck1">
                      Active 
                    </label>
                    <input type="hidden" name="active" value="0"/>
                    <input class="form-check-input" type="checkbox" name="active" value="1" checked> 
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- update modal -->
        <div class="modal fade" id="updateCarModal" tabindex="-1" aria-labelledby="updateCarModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateCarModalLabel">Edit Car</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="config/update-car.php" method="POST" enctype="multipart/form-data" id="updateCarForm">
                  <input type="hidden" name="car_id" id="carIdToUpdate">  <div class="form-group mb-3">
                    <label for="updateName">Name</label>
                    <input type="text" name="name" class="form-control" id="updateName" placeholder="e.g. New Corolla Altis Hybrid">
                  </div>
                  <div class="form-group mb-3">
                    <label for="updatePrice">Price</label>
                    <input type="number" name="price" class="form-control" id="updatePrice" placeholder="e.g. 200.000.000">
                  </div>
                  <div class="form-group mb-3">
                    <label for="updatePhoto">Photo</label>
                    <img class="col-sm-5 d-block" id="carImagePreview" alt="Car Image">  
                    <input type="file" name="photo" class="form-control" id="updatePhoto">
                  </div>
                  <div class="form-group mb-3">
                    <label for="updateType">Type</label>
                    <select name="type" class="form-select" id="updateType">
                      <option value="mpv">MPV</option>
                      <option value="suv">SUV</option>
                      <option value="hatchback">Hatchback</option>
                      <option value="electrified">Electrified</option>
                      <option value="sports">Sports</option>
                      <option value="sedan">Sedan</option>
                      <option value="commercial">Commercial</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-check-label" for="updateActive">
                      Active
                    </label>
                    <input type="hidden" name="active" value="0">  <input class="form-check-input" type="checkbox" name="active" value="1" id="updateActive">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="updateCarForm" class="btn btn-primary">Save Changes</button>
              </div>
            </div>
          </div>
        </div>


        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Tabs Justified</h5>

              <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100 active" id="mpv-tab" data-bs-toggle="tab" data-bs-target="#mpv-justified" type="button" role="tab" aria-controls="mpv" aria-selected="true">
                    MPV
                  </button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="suv-tab" data-bs-toggle="tab" data-bs-target="#suv-justified" type="button" role="tab" aria-controls="suv" aria-selected="false">
                    SUV
                  </button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="hatchback-tab" data-bs-toggle="tab" data-bs-target="#hatchback-justified" type="button" role="tab" aria-controls="hatchback" aria-selected="false">
                    Hatchback
                  </button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="electrified-tab" data-bs-toggle="tab" data-bs-target="#electrified-justified" type="button" role="tab" aria-controls="electrified" aria-selected="false">
                    Electrified
                  </button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="sports-tab" data-bs-toggle="tab" data-bs-target="#sports-justified" type="button" role="tab" aria-controls="sports" aria-selected="false">
                    Sports
                  </button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="sedan-tab" data-bs-toggle="tab" data-bs-target="#sedan-justified" type="button" role="tab" aria-controls="sedan" aria-selected="false">
                    Sedan
                  </button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="commercial-tab" data-bs-toggle="tab" data-bs-target="#commercial-justified" type="button" role="tab" aria-controls="commercial" aria-selected="false">
                    Commercial
                  </button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabjustifiedContent">
                <!-- MPV -->
                <div class="tab-pane fade show active" id="mpv-justified" role="tabpanel" aria-labelledby="mpv-tab">
                  <div class="row">
                    
                  <?php $fetch=$con->query("SELECT * FROM cars WHERE `type` = 'mpv' AND `active` = 1"); ?>
                    <?php while ($data = $fetch->fetch_assoc()) { ?>
                    
                    <div class="col-lg-3 d-flex">
                        
                      <div class="card">
                        <img src="file/photo/<?= $data['photo'] ; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $data['name'] ; ?></h5>
                          <p class="card-text">Rp. <?= number_format($data['price'], 0, '.', ','); ?></p>
                          <input type="hidden" name="carIdToUpdate" value="<?= $data['id']; ?>">
                          <button type="button" class="btn btn-warning edit-car-btn" data-car-id="<?= $data['id']; ?>" >
                            Edit
                          </button>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ; ?>
                  </div>
                </div>

                <!-- SUV -->
                <div class="tab-pane fade" id="suv-justified" role="tabpanel" aria-labelledby="suv-tab">
                  <div class="row">
                    
                    <?php $fetch=$con->query("SELECT * FROM cars WHERE `type` = 'suv'"); ?>
                    <?php while ($data = $fetch->fetch_assoc()) { ?>
                    
                    <div class="col-lg-3 d-flex">
                        
                      <div class="card">
                        <img src="file/photo/<?= $data['photo'] ; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $data['name'] ; ?></h5>
                          <p class="card-text">Rp. <?= number_format($data['price'], 0, '.', ','); ?></p>
                          <a href="#" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ; ?>
                  </div>
                </div>

                <!-- Hatchback -->
                <div class="tab-pane fade" id="hatchback-justified" role="tabpanel" aria-labelledby="hatchback-tab">
                  <div class="row">
                    
                    <?php $fetch=$con->query("SELECT * FROM cars WHERE `type` = 'hatchback' AND `active` = 1"); ?>
                    <?php while ($data = $fetch->fetch_assoc()) { ?>
                    
                    <div class="col-lg-3 d-flex">
                        
                      <div class="card">
                        <img src="file/photo/<?= $data['photo'] ; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $data['name'] ; ?></h5>
                          <p class="card-text">Rp. <?= number_format($data['price'], 0, '.', ','); ?></p>
                          <a href="#" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ; ?>
                  </div>
                </div>

                <!-- electrified -->
                <div class="tab-pane fade" id="electrified-justified" role="tabpanel" aria-labelledby="electrified-tab">
                  <div class="row">
                    
                    <?php $fetch=$con->query("SELECT * FROM cars WHERE `type` = 'electrified' AND `active` = 1"); ?>
                    <?php while ($data = $fetch->fetch_assoc()) { ?>
                    
                    <div class="col-lg-3 d-flex">
                        
                      <div class="card">
                        <img src="file/photo/<?= $data['photo'] ; ?>" class="card-img-top" alt="..." width="400" height="400">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $data['name'] ; ?></h5>
                          <p class="card-text">Rp. <?= number_format($data['price'], 0, '.', ','); ?></p>
                          <a href="#" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ; ?>
                  </div>
                </div>

                <!-- sports -->
                <div class="tab-pane fade" id="sports-justified" role="tabpanel" aria-labelledby="sports-tab">
                  <div class="row">
                    
                    <?php $fetch=$con->query("SELECT * FROM cars WHERE `type` = 'sports' AND `active` = 1"); ?>
                    <?php while ($data = $fetch->fetch_assoc()) { ?>
                    
                    <div class="col-lg-3 d-flex">
                        
                      <div class="card">
                        <img src="file/photo/<?= $data['photo'] ; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $data['name'] ; ?></h5>
                          <p class="card-text">Rp. <?= number_format($data['price'], 0, '.', ','); ?></p>
                          <a href="#" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ; ?>
                  </div>
                </div>

                <!-- sedan -->
                <div class="tab-pane fade" id="sedan-justified" role="tabpanel" aria-labelledby="sedan-tab">
                  <div class="row">
                    
                    <?php $fetch=$con->query("SELECT * FROM cars WHERE `type` = 'sedan' AND `active` = 1"); ?>
                    <?php while ($data = $fetch->fetch_assoc()) { ?>
                    
                    <div class="col-lg-3 d-flex">
                        
                      <div class="card">
                        <img src="file/photo/<?= $data['photo'] ; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $data['name'] ; ?></h5>
                          <p class="card-text">Rp. <?= number_format($data['price'], 0, '.', ','); ?></p>
                          <a href="#" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ; ?>
                  </div>
                </div>

                <!-- commercial -->
                <div class="tab-pane fade" id="commercial-justified" role="tabpanel" aria-labelledby="commercial-tab">
                  <div class="row">
                    
                    <?php $fetch=$con->query("SELECT * FROM cars WHERE `type` = 'commercial' AND `active` = 1"); ?>
                    <?php while ($data = $fetch->fetch_assoc()) { ?>
                    
                    <div class="col-lg-3 d-flex">
                        
                      <div class="card">
                        <img src="file/photo/<?= $data['photo'] ; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $data['name'] ; ?></h5>
                          <p class="card-text">Rp. <?= number_format($data['price'], 0, '.', ','); ?></p>
                          <a href="#" class="btn btn-warning">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ; ?>
                  </div>
                </div>
                
              </div>

            </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php include 'include/footer.php' ; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
  // Attach click event listener to "Edit" buttons (assuming they have a class "edit-car-btn")
$(document).on('click', '.edit-car-btn', function(e) {
  e.preventDefault(); // Prevent default form submission

  // Get the car ID from the button's data attribute (replace "data-car-id" if different)
  var carId = $(this).data('carId');

  // Use AJAX to fetch car data for edit
  $.ajax({
    // url: '/admin/config/get-car-data.php', // Replace with your endpoint to get car data
    // url: 'http://localhost/toyota/admin/config/get-car-data.php',
    url: '<?php echo $baseUrl; ?>/config/get-car-data.php',
    method: 'POST',
    data: { id: carId },
    success: function(data) {
      const response= JSON.parse(data);

      // Extract image URL from response
      // console.log(response.photo);
      const imageUrl = `<?php echo $baseUrl; ?>/file/photo/${response.photo}`;

      $('#carIdToUpdate').val(response.id); // Set the hidden car ID field
      $('#updateName').val(response.name);
      $('#updatePrice').val(response.price);
      $('#updateType').val(response.type); // Set the selected option in the type dropdown
      $('#updateActive').prop('checked', response.active === 1); // Check the active checkbox if applicable

      $('#carImagePreview').attr('src', imageUrl);

      // Show the update modal
      $('#updateCarModal').modal('show');
    },
    error: function(xhr, status, error) {
    console.error("Error fetching data:", status, error);
  }
  });
});

// Handle form submission in the update modal (assuming form ID is "updateCarForm")
$('#updateCarForm').submit(function(e) {
  e.preventDefault(); // Prevent default form submission

  // Get form data (consider using FormData for file uploads)
  var formData = new FormData($(this)[0]); // Assuming form has ID "updateCarForm"

  let carId = $(this).data('carId');
  // Use AJAX to send update data
  $.ajax({
    // url: 'http://localhost/toyota/admindfdf/config/update-cars.php', // Replace with your actual update endpoint
    url: '<?php echo $baseUrl; ?>/config/update-cars.php?id=' . carId, // Replace with your actual update endpoint
    type: 'PUT',
    data: formData,
    processData: false, // Don't process data for file uploads
    contentType: false, // Set appropriate content type for FormData
    success: function(response, error) {
      if (response.success) {
        // Handle successful update (e.g., close modal, show success message, update displayed data)
        $('#updateCarModal').modal('hide');
        alert('Car updated successfully!');

        // Update the displayed car data on the page (if applicable)
        // Replace "updateCarList" with your actual function/method to update the displayed list
        updateCarList();
      } else {
        // Handle update error (e.g., display error message)
        alert('Error updating car!' + response.message + error);
      }
    },
    error: function(xhr, status, error) {
      alert('An error occurred: ' + error);
    }
  });
});

// $('.btn-update-kategori').on('click', function (e) {
//         e.preventDefault();
//         let form=$('.form-kategori')[0];
//         let data=new FormData(form);
//         let carId = $(this).data('carId');
//         const categoryId = $("#current_id_category").val();
//         // Perform the update AJAX request with form data
//         let url='http://localhost/toyota/admin/config/update-carsphp?carId=' . carId;

//         url=url.replace(':CategoryId',categoryId);
//         console.log(url);
//         $.ajax({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             },
//             url : url,
//             type: 'POST',
//             data: data,
//             dataType: 'json',
//             processData: false,
//             contentType: false,
//             cache: false,
//             success: function (updateResponse) {
//                 // Handle the success response (e.g., close the modal, update UI, etc.)
//                 $('#update-modal').modal('hide');
//                 window.location.reload();
//             },
//             error: function (updateError) {
//                 console.error('Error updating category:', updateError);
//             }
//         });
//     });

</script>