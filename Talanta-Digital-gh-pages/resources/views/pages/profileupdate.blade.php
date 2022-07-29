<div class="card-body col-md-6">
    <div class="row mb-2">
        <div class="form-group col-sm-6">
            <label for="phone_number" class="text-capitalize">phone number</label>
            <input type="text" class="form-control text-capitalize" name="phone_number" id="phone_number"
                placeholder="Your phone number">
                <small class="text-danger d-none" id="phone_err"></small>
        </div>
        <div class="form-group col-sm-6">
            <label for="year_of_birth" class="text-capitalize">Date Of Birth</label>
            <input type="date" class="form-control" name="year_of_birth" id="year_of_birth">
            <small class="text-danger d-none" id="birth_err"></small>
        </div>
    </div>
    <div class="row mb-2">
        <div class="form-group col-sm-6">
            <label for="highest_level_of_education" class="text-capitalize">Hihest level of education</label>
            <input type="text" class="form-control text-capitalize" name="highest_level_of_education" id="highest_level_of_education"
                placeholder="Highest level of education">
                <small class="text-danger d-none" id="education_err"></small>
        </div>
        <div class="form-group col-sm-6">
            <label for="county" class="text-capitalize">county</label>
            <input type="text" class="form-control text-capitalize" name="county" id="county" placeholder="Your county">
            <small class="text-danger d-none" id="county_err"></small>
        </div>
    </div>
    <div class="row mb-2">
        <div class="form-group col-sm-6">
            <label for="sub_county" class="text-capitalize">sub county</label>
            <input type="text" class="form-control text-capitalize" name="sub_county" id="sub_county" placeholder="Your sub county">
            <small class="text-danger d-none" id="sub_err"></small>
        </div>
        <div class="form-group col-sm-6">
            <label for="address">Address</label>
            <input type="text" class="form-control text-capitalize" name="address" id="address"
                placeholder="Apartment, studio, village or floor">
                <small class="text-danger d-none" id="add_err"></small>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-md rounded border text-white bg-success" id="profile-submit">Update</button>
</div>
