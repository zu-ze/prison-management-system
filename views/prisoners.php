<div class="container">
    <div id="tabMenu">
        <ul id="tabList" class="flex-row justify-center">
            <li id="active" onclick="showTab('add-prisoner-record');">
                <div>
                    <span><span class="fas fa-plus"></span></span>
                    <span>add a new prisoner record.</span>
                </div>    
            </li>
            <li onclick="showTab('prisoner-records')">
                <div>
                    <span><span class="fas fa-table"></span></span>
                    <span>Show Prisoner records.</span>
                </div>
            </li>
        </ul>
    </div>
    <hr>
    <div id="tabContents">
            <div id="add-prisoner-record">
                <fieldset class="shadowed" style="margin-top:0;">
                <div class="flex-row justify-space-between">
                <caption><h3>Enter Details of New Prisoner</h3></caption>
                <span id="close-add-prisoner-btn"style="margin-right:1rem;"><span class="fas fa-window-close"></span></span>
                </div>
                <hr>
                <form action="/admin/prisoners" method="post">
                    <div class="flex-row justify-space-between">
                        <div class="form-group flex-row justify-space-between ">
                            <label for="firstname">Firstname: </label>
                            <input type="text" name="firstname" id="firstname">
                        </div>
                        <div class="form-group flex-row justify-space-between">
                            <label for="surname">Surname: </label>
                            <input type="text" name="surname" id="surname">
                        </div>
                    </div>
                    <div class="flex-row justify-space-between">
                        <div class="form-group flex-row justify-space-between">
                            <label for="DOB">Date Of Birth: </label>
                            <input type="date" name="DOB" id="DOB">
                        </div>
                        <div class="form-group flex-row justify-space-between">
                            <label for="gender">Gender: </label>
                            <select name="gender" id="gender">
                                <option value="none">choose...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex-row justify-space-between">
                        <div class="form-group flex-row justify-space-between">
                            <label for="eviction-date">Evicted on: </label>
                            <input type="date" name="eviction-date" id="eviction-date">
                        </div>
                        <div class="form-group flex-row justify-space-between">
                            <label for="national-id">National Id: </label>
                            <input type="text" name="national-id" id="national-id">
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-secondary" type="submit">SUBMIT</button>
                    </div>
                </form>
            </fieldset>
        </div>
        <div id="prisoner-records" style="display: none;">
            <?php if($prisoners): ?>
                <table id="prisoner-records" class="shadowed" summary="This table diplays prisoner records.">
                    <!-- <caption>Prisoner records</caption>    -->
                    <thead>
                        <tr>
                            <th id="id-number">ID</th>
                            <th id="natinal-id">National Id</th>
                            <th id="name">Fullname</th>
                            <th id="gender">Gender</th>
                            <th id="prisoner-status">Status</th>
                            <th id="eviction-date">Evicted On</th>
                            <th id="action"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($prisoners as $prisoner): ?>
                        <tr class="alternate">
                                <td headers="id-number"><?php echo $prisoner['id'];?></td>
                                <td headers="national-id"><?php echo $prisoner['national-id'];?></td>
                                <td headers="name"><?php echo $prisoner['firstname'].' '.$prisoner['surname'] ;?></td>
                                <td headers="gender"><?php echo $prisoner['gender'];?></td>
                                <td headers="prisoner-status"><?php echo $prisoner['status'];?></td>
                                <td headers="eviction-date"><?php echo $prisoner['eviction-date'];?></td>
                                <td><a class="btn btn-primary" href="/admin/prisoners/profile?id=<?php echo $prisoner['id']; ?>">view</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                <?php else: ?>
                    <div class="flex-column justify-center">
                        <span>Oops! No ecords to show here.</span>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</div>