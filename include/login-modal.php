<div class="modal fade" id="loginModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 30vw;">
        <div class=" modal-content  shadow-sm">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $current_page . ".php"; ?>" method="POST">
                    <div class="container">
                        <h3 class="mb-3">
                            Login
                        </h3>
                        <div class="mb-3">
                            <label for="srcode" class="form-label">SR Code</label>
                            <input type="text" class="form-control rounded-0 border border-dark border-2" name="srcode"
                                id="srcode" placeholder="SR Code">
                        </div>
                        <div class="mb-3" class="form-label">
                            <label for="password">Password</label>

                            <input type="password" class="form-control rounded-0 border border-dark border-2"
                                name="password" id="password" placeholder="Password">
                        </div>
                        <div class="d-grid gap-3">
                            <a href="#" class="text-end text-decoration-none">Forgot Password?</a>
                            <button type="submit" class="btn btn-dark rounded-0 mb-3">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>