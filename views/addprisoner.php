<div class="container">
    <div id="tabMenu">
        <ul id="tabList" class="flex-row justify-center">
            <li>
                <a href="/admin/addprisoner"><div>
                    <span><span class="fas fa-plus"></span></span>
                    <span>add a new prisoner record.</span>
                </div>    
            </li>
            <li>
                <a href="/admin/showprisoners"><div>
                    <span><span class="fas fa-table"></span></span>
                    <span>Show Prisoner records.</span>
                </div></a>
            </li>
        </ul>
    </div>
    <hr>
    <div id="tabContents">
            <div id="add-prisoner-record">
                <fieldset class="shadowed" style="margin-top:0;">
                <div class="flex-row justify-center">
                <caption><h3>Enter Details of New Prisoner</h3></caption>
                </div>
                <hr>
                <form action="/admin/addprisoner" method="post">
                    <div class="flex-row justify-space-between">
                        <div class="form-group flex-row justify-space-between ">
                            <label for="firstname">Firstname: </label>
                            <div>
                                <input type="text" name="firstname" id="firstname">
                                <div class="invalid-feedback <?php echo $model->hasError('firstname') ? 'is-invalid' : ''; ?>">
                                    <?php echo $model->getFirstError('firstname');?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group flex-row justify-space-between">
                            <label for="surname">Surname: </label>
                            <div>
                                <input type="text" name="surname" id="surname">
                                <div class="invalid-feedback <?php echo $model->hasError('surname') ? 'is-invalid' : ''; ?>">
                                    <?php echo $model->getFirstError('surname');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-row justify-space-between">
                        <div class="form-group flex-row justify-space-between">
                            <label for="DOB">Date Of Birth: </label>
                            <div>
                                <input type="date" name="DOB" id="DOB">
                                <div class="invalid-feedback <?php echo $model->hasError('DOB') ? 'is-invalid' : ''; ?>">
                                    <?php echo $model->getFirstError('DOB');?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group flex-row justify-space-between">
                            <label for="gender">Gender: </label>
                            <div>
                                <select name="gender" id="gender">
                                    <option value="none">choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <div class="invalid-feedback <?php echo $model->hasError('gender') ? 'is-invalid' : ''; ?>">
                                    <?php echo $model->getFirstError('gender');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-row justify-space-between">
                        <div class="form-group flex-row justify-space-between">
                            <label for="eviction-date">Evicted on: </label>
                            <div>
                                <input type="date" name="evictedOn" id="evictedOn">
                                <div class="invalid-feedback <?php echo $model->hasError('evictedOn') ? 'is-invalid' : ''; ?>">
                                    <?php echo $model->getFirstError('evictedOn');?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group flex-row justify-space-between">
                            <label for="national-id">National Id: </label>
                            <div>
                                <input type="text" name="nationalId" id="nationalId">
                                <div class="invalid-feedback <?php echo $model->hasError('nationalId') ? 'is-invalid' : ''; ?>">
                                    <?php echo $model->getFirstError('nationalId');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-secondary" type="submit">SUBMIT</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>