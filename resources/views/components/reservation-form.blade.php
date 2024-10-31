<div class="card card-body">
    <form>
        <div class="form-row">
            <div class="form-group row col-md-5">
                <label for="acara" class="col-form-label">Acara</label>
                <div class="col-md-8">
                <select class="form-control" id="nomer_kamar">
                            <option>Select...</option>
                        </select>
                </div>
            </div>
            <div class="form-group row col-md-7">
                <label for="checkin" class="col-form-label">Check-in</label>
                <div class="col-auto">
                    <input type="date" class="form-control" id="checkin">
                </div>
                <label for="checkout" class="col-form-label">Check-out</label>
                <div class="col-auto">
                    <input type="date" class="form-control" id="checkout">
                </div>
            </div>
        </div>
        <div class="col row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="nomer_kamar" class="col-form-label">Nomer Kamar</label>
                    <div class="col-md-6">
                        <select class="form-control" id="nomer_kamar">
                            <option>Select...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-check form-check-inline">
                        <label class="col-form-label mr-3">Jenis Kelamin</label><br>
                        <input class="form-check-input" type="radio" name="gender" id="genderL" value="L" checked>
                        <label class="form-check-label mr-3" for="genderL">
                            L
                        </label>
                        <input class="form-check-input" type="radio" name="gender" id="genderP" value="P">
                        <label class="form-check-label" for="genderP">
                            P
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="nomer_kamar" class="col-form-label">Nama</label>
                    <div class="col ml-4">
                        <div class="from-group row">
                            <label for="nomer_kamar" class="col-form-label">1</label>
                            <div class="col mb-2">
                                <select class="form-control" id="nomer_kamar">
                                    <option>Select...</option>
                                </select>
                            </div>
                        </div>
                        <div class="from-group row">
                            <label for="nomer_kamar" class="col-form-label">2</label>
                            <div class="col mb-2">
                                <select class="form-control" id="nomer_kamar">
                                    <option>Select...</option>
                                </select>
                            </div>
                        </div>
                        <div class="from-group row">
                            <label for="nomer_kamar" class="col-form-label">3</label>
                            <div class="col mb-2">
                                <select class="form-control" id="nomer_kamar">
                                    <option>Select...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col row">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
