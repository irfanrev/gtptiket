<?= view('layout/header'); ?>


<div class="HomeDefault" style="width: 100%; background: white;">
    <div class="Rectangle4" style="height: 300px; background: #5CBBC1; border-bottom-left-radius: 80px; border-bottom-right-radius: 80px;"></div>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: -200px; padding-left: 50px; padding-right: 50px;">
        <div style="display: flex; align-items: center;">
            <img style="width: 80px; height: 80px;" src="<?= base_url() ?>assets/img/ic_avatar.png" alt="" />
            <div style="margin-left: 16px; color: white; font-weight: 600; font-size: 18px;"><?= $name ?></div>
        </div>
        <img style="height: 80px;" src="<?= base_url() ?>assets/img/logo.png" alt="" />
    </div>

    <div style="margin: 4rem 50px; background-color: white; box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1); border-radius: 2rem; padding: 2rem;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
            <div style="color: #4B5563; font-size: 1.125rem; font-weight: 600;  text-align: center;">Menu Utama</div>
            <a href="<?= base_url('logout') ?>">
                <img style="width: 35px; height: 35px;" src="<?= base_url() ?>assets/img/ic_logout.png" alt="" />
            </a>
        </div>
        <div style="border-top: 1px solid #D1D5DB; margin: 1rem 0;"></div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; justify-content: center; margin-top: 15px;">
            <?php if ($role_id == 1 || $role_id == 3) : ?>
                <a href="<?= base_url('loket') ?>" class="menu-item" style="text-decoration: none; color: inherit;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <div style="width: 9rem; height: 9rem; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <img style="width: 5rem; height: 5rem;" src="<?= base_url() ?>assets/img/ic_loket.png" />
                            <div class="text-gray-600 text-lg font-semibold mt-2">Loket</div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($role_id == 1 || $role_id == 5) : ?>
                <a href="<?= base_url('booth') ?>" class="menu-item" style="text-decoration: none; color: inherit;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <div style="width: 9rem; height: 9rem; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <img style="width: 5rem; height: 5rem;" src="<?= base_url() ?>assets/img/ic_booth.png" />
                            <div class="text-gray-600 text-lg font-semibold mt-2">Booth</div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($role_id == 1 || $role_id == 3) : ?>
                <a href="<?= base_url('minizoo') ?>" class="menu-item" style="text-decoration: none; color: inherit;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <div style="width: 9rem; height: 9rem; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <img style="width: 5rem; height: 5rem;" src="<?= base_url() ?>assets/img/ic_zoo.png" />
                            <div class="text-gray-600 text-lg font-semibold mt-2">Zoo</div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($role_id == 1 || $role_id == 3 || $role_id == 4 || $role_id == 5) : ?>
                <a href="<?= base_url('saldo') ?>" class="menu-item" style="text-decoration: none; color: inherit;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <div style="width: 9rem; height: 9rem; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <img style="width: 5rem; height: 5rem;" src="<?= base_url() ?>assets/img/ic_saldo.png" />
                            <div class="text-gray-600 text-lg font-semibold mt-2">Cek Saldo</div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($role_id == 1 || $role_id == 4) : ?>
                <a href="<?= base_url('gate') ?>" class="menu-item" style="text-decoration: none; color: inherit;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <div style="width: 9rem; height: 9rem; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <img style="width: 5rem; height: 5rem;" src="<?= base_url() ?>assets/img/ic_gate.png" />
                            <div class="text-gray-600 text-lg font-semibold mt-2">Gate</div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($role_id == 1) : ?>
                <a href="#" class="menu-item" style="text-decoration: none; color: inherit;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <div style="width: 9rem; height: 9rem; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <img style="width: 5rem; height: 5rem;" src="<?= base_url() ?>assets/img/ic_printer.png" />
                            <div class="text-gray-600 text-lg font-semibold mt-2">Printer</div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($role_id == 1 || $role_id == 2) : ?>
                <a href="<?= base_url('summary') ?>" class="menu-item" style="text-decoration: none; color: inherit;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <div style="width: 9rem; height: 9rem; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <img style="width: 5rem; height: 5rem;" src="<?= base_url() ?>assets/img/ic_summary.png" />
                            <div class="text-gray-600 text-lg font-semibold mt-2">Summary</div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($role_id == 1 || $role_id == 2) : ?>
                <a href="<?= base_url('rekap') ?>" class="menu-item" style="text-decoration: none; color: inherit;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <div style="width: 9rem; height: 9rem; background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 1rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <img style="width: 5rem; height: 5rem;" src="<?= base_url() ?>assets/img/ic_report.png" />
                            <div class="text-gray-600 text-lg font-semibold mt-2">Rekap</div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        </div>

        <!-- Tambahkan kode untuk menu lainnya disini -->
    </div>
    <div style="text-align: center; font-size: 1.125rem; font-weight: 600; color: #4FD1C5; margin-top: 2rem; margin-bottom: 1rem;">Goalpara Tea Park 2024</div>
    <div style="height: 150px;"></div>
</div>

<?= view('layout/footer'); ?>