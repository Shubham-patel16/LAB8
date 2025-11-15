<?php require_once 'include/header.php'; ?>

<div class="container">
    <h1>testing.. </h1>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form class="row g-3" method="POST" action="receive.php">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address" required>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" required>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">province</label>
                    <select id="inputState" class="form-select" name="province" required>

                        <option value="" selected disabled>Choose...
                        </option>
                        <option>Alberta
                        </option>
                        <option>British Columbia</option>
                        <option>Manitoba</option>
                        <option>New Brunswick</option>
                        <option>Newfoundland</option>
                        <option>Labrador
                            Northwest Territories</option>
                        <option>Nova Scotia</option>
                        <option>Nunavut</option>
                        <option>Ontario</option>
                        <option>Prince Edward Island
                            Quebec</option>
                        <option>Saskatchewan</option>
                        <option>Yukon</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">postal code</label>
                    <input type="text" class="form-control" id="inputZip" name="postal_code" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="container">
                    <div class="row justify-content-center mt-5">
                        <div class="col-8">
                            <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once 'include/footer.php'; ?>