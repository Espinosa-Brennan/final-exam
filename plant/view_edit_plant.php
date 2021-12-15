<div class="modal fade" id="edit_axie<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Axie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="axie/edit_axie.php?id=<?php echo $row['id']; ?>" method="post">
        <div class="modal-body">


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" >
              <label for="floatingInput">Name</label>
            </div>


            <div class="form-floating mb-3">
              <select class="form-select" id="axieclass" name="axieclass" aria-label="Floating label select example" value="<?php echo $row['class']; ?>">
                <option <?php if ($row['class'] == "None") {echo "selected";} ?>>None</option>
                <option value='Plant' <?php if ($row['class'] == "Plant") {echo "selected";} ?>>Plant</option>
                <option value='Aqua' <?php if ($row['class'] == "Aqua") {echo "selected";} ?>>Aqua</option>
                <option value='Reptile' <?php if ($row['class'] == "Reptile") {echo "selected";} ?>>Reptile</option>
              </select>
              <label for="floatingSelect">Class</label>


            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="breedcount" name="breedcount" value="<?php echo $row['breed_count']; ?>">
              <label for="floatingInput">Breed Count</label>
            </div>

            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>