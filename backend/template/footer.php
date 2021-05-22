</div>
    
                </div>
            </div>  
        </section>
    </div>
    
        <?php if ($_SERVER['REQUEST_URI']=="/"||$_SERVER['REQUEST_URI']=="/index.php") {
                ?>
                <div class="br_partner">
                    <div class="container">
                        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/partner.php') ?>
                    </div>
                </div>
                <?php   }  ?>    

        <!-- footer -->
        <footer class="br_footer" id="footer">
        	<div class="container">
        		<div class="row">
        			<div class="col-3">
						<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/logotype.php') ?>  
        			</div>
        			<div class="col-3 br_contacts">
        				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/contacts.php') ?>
        			</div>
        			<div class="col-3 br_contacts">
        				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/phone.php') ?>
        			</div>
        			<div class="col-3">
        				<a href="javascript:void(0)" class="policy">Privacy Policy</a>
        				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/copyright.php') ?> 
        			</div>
        		</div>
        	</div>	
        </footer>
        <!-- / footer -->
</body>
</html>