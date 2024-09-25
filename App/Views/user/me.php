<?php
$avatarUrl = "https://www.gravatar.com/avatar/".md5( strtolower( trim( $user->email)))."?d=identicon&s=200";
?>
<div class="container-fluid">
    <h3 class="text-dark mb-4"><?=$user->first_name . ' ' . $user->last_name?>'s Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="<?=$avatarUrl ?>" width="160" height="160">
                    <div class="mb-3"><a href="https://gravatar.com" title="Change your avatar through Gravatar!" target="_blank" onclick="alert('A new tab has opened. Once you have updated your profile picture, please refresh this page')"><button class="btn btn-primary btn-sm" type="button" style="background: var(--bs-dark);" >Change Photo</button></a></div>
                </div>
            </div>
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <p class="text-primary m-0 fw-bold">Socials (to be impolemented)</p>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="user.steam"><strong>Steam</strong></label><input class="form-control" type="text" id="username-2" placeholder="steam name" name="steam" disabled></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="user.battlenet"><strong>BattleNet</strong></label><input class="form-control" type="email" id="email-2" placeholder="battlenet#tag" name="battlenet" disabled></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="user.xbox"><strong>XBOX</strong></label><input class="form-control" type="text" id="first_name-2" placeholder="xbox live name" name="xbox" disabled></div>
                            </div>
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="user.psn"><strong>PSN</strong></label><input class="form-control" type="text" id="last_name-2" placeholder="playstation name" name="psn" disabled></div>
                            </div>
                        </div>
                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="background: var(--bs-dark);" disabled>Update Socials</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
<!--            <div class="row mb-3 d-none">-->
<!--                <div class="col">-->
<!--                    <div class="card text-white bg-primary shadow">-->
<!--                        <div class="card-body">-->
<!--                            <div class="row mb-2">-->
<!--                                <div class="col">-->
<!--                                    <p class="m-0">Peformance</p>-->
<!--                                    <p class="m-0"><strong>65.2%</strong></p>-->
<!--                                </div>-->
<!--                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>-->
<!--                            </div>-->
<!--                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col">-->
<!--                    <div class="card text-white bg-success shadow">-->
<!--                        <div class="card-body">-->
<!--                            <div class="row mb-2">-->
<!--                                <div class="col">-->
<!--                                    <p class="m-0">Peformance</p>-->
<!--                                    <p class="m-0"><strong>65.2%</strong></p>-->
<!--                                </div>-->
<!--                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>-->
<!--                            </div>-->
<!--                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">User Settings</p>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input class="form-control" type="text" id="user[email]" placeholder="<?=$user->email?>" name="user[email]" value="<?=$user->email?>" disabled></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="user[email]" placeholder="<?=$user->email?>" name="user[email]" value="<?=$user->email?>"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="user[first_name]" placeholder="<?=$user->first_name?>" name="user[first_name]" value="<?=$user->first_name?>"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="user[last_name]" placeholder="<?=$user->last_name?>" name="user[last_name]" value="<?=$user->last_name?>"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="background: var(--bs-dark);">Save Profile</button></div>
                                    </div>
                                    <div class="col"></div>
                                    <div class="col">
                                        <label for="user[role]">Role:</label><select id="user[role]" name="user[role]">
                                            <?php
                                            foreach($roleOpt as $role){
                                                echo $role;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">In Game Names (To be Implemented)</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="user.steam"><strong>Steam</strong></label><input class="form-control" type="text" id="username-1" placeholder="steam name" name="steam" disabled></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="user.battlenet"><strong>BattleNet</strong></label><input class="form-control" type="email" id="email-1" placeholder="battlenet#tag" name="battlenet" disabled></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="user.xbox"><strong>XBOX</strong></label><input class="form-control" type="text" id="first_name-1" placeholder="xbox live name" name="xbox" disabled></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="user.psn"><strong>PSN</strong></label><input class="form-control" type="text" id="last_name-1" placeholder="playstation name" name="psn" disabled></div>
                                    </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" style="background: var(--bs-dark);" disabled>Update IGNs</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    function confirmUpdate(){
        if(!confirm("Are you sure you want to submit these changes?")){
            document.location.reload()
        }
    }

</script>