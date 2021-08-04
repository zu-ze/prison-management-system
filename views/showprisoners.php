<div class="container">
    <div id="tabMenu">
        <ul id="tabList" class="flex-row justify-center">
            <li>
                <a href="/admin/prisoners"><div>
                    <span><span class="fas fa-table"></span></span>
                    <span>Show Prisoner records.</span>
                </div></a>
            </li>    
            <li>
                <a href="/admin/addprisoner"><div>
                    <span><span class="fas fa-plus"></span></span>
                    <span>add a new prisoner record.</span>
                </div></a>    
            </li>
        </ul>
    </div>
    <hr>
    <div id="tabContents">
        <div id="prisoner-records">
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
                                <td headers="national-id"><?php echo $prisoner['nationalId'];?></td>
                                <td headers="name"><?php echo $prisoner['firstname'].' '.$prisoner['surname'] ;?></td>
                                <td headers="gender"><?php echo $prisoner['gender'];?></td>
                                <td headers="prisoner-status"><?php echo $prisoner['status'];?></td>
                                <td headers="eviction-date"><?php echo $prisoner['evictedOn'];?></td>
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