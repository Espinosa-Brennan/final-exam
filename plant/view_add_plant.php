<div class="modal fade" id="add_axie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Axie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="axie/add_axie.php" method="post">
        <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating mb-3">
              <select class="form-select" id="axieclass" name="axieclass" aria-label="Floating label select example">
                <option selected>None</option>
                <option value="Plant">Plant</option>
                <option value="Aqua">Aqua</option>
                <option value="Reptile">Reptile</option>
              </select>
              <label for="floatingSelect">Class</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="breedcount" name="breedcount" placeholder="Name">
              <label for="floatingInput">Breed Count</label>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>