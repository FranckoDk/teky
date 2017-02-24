<?php
/**
 * The template for displaying the footer.
 */
global $foxtail_options;
?>

<footer>
	<div class="top-footer">
		<div class="container">
			<div class="top-content">
				<div class="left">
					<ul class="contact-info">
						<li><i class="contact-ico address"></i><span>Số 6, Nguyễn Thị Thập, KĐT Trung Hoà<br/>Nhân Chính, Quận Cầu Giấy, Hà Nội</span></li>
						<li><i class="contact-ico phone"></i><span>1900-1789</span></li>
						<li><i class="contact-ico mail"></i><span>contact@teky.edu.vn</span></li>
					</ul>
					<div class="heart-box">
						<i class="heart-ico"></i>
						<span>Có <strong>1.093 trái tim</strong> của học sinh<br/>đã gửi đến đội ngũ giảng dạy TEKY</span>
					</div>
				</div>
				<div class="right">
					<div class="row">
						<div class="col-md-4">
							<div class="foot-title">Về Teky</div>
							<ul>
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Lịch khai giảng</a></li>
								<li><a href="#">Đội ngũ giảng dạy</a></li>
								<li><a href="#">Phòng trưng bày</a></li>
								<li><a href="#">Giá phí</a></li>
								<li><a href="#">Thư viện</a></li>
								<li><a href="#">Liên hệ</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<div class="foot-title">Khóa học</div>
							<ul>
								<li><a href="#">Lập trình Python</a></li>
								<li><a href="#">Scratch</a></li>
								<li><a href="#">Robotics</a></li>
								<li><a href="#">Webdesign</a></li>
								<li><a href="#">Design</a></li>
								<li><a href="#">Game IoT</a></li>
							</ul>
						</div>
						<div class="col-md-4">
							<div class="foot-title">Trợ giúp</div>
							<ul>
								<li><a href="#">Làm sao để đăng ký khoá học</a></li>
								<li><a href="#">Muốn tư vấn thì phải làm sao</a></li>
								<li><a href="#">Thủ tục nhập học như thế nào</a></li>
								<li><a href="#">Chi phí mỗi khoá học</a></li>
								<li><a href="#">Trình độ giáo viên ra sao</a></li>
								<li><a href="#">Tiêu chuẩn giảng dạy tốt không</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="mid-footer">
				<div class="left">
					<span class="global-ico"></span>
					<span class="text">Lựa chọn ngôn ngữ:</span>
					<div class="dropdown-box">
						<a href="#">Việt Nam <i class="fa fa-angle-down"></i></a>
						<div class="drop-content">
							<ul>
								<li><a href="#">English</a></li>
								<li><a href="#">Chinese</a></li>
								<li><a href="#">France</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="right">
					<ul class="social-list">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="bot-footer">
		<div class="container">
			<div class="foot-box">
				<div class="left">
					<a href="#"><img src="img/logo-white.png" alt="" title=""/></a>
				</div>
				<div class="mid">
					<p>© 2016. All rights reserved.</p>
					<p>Terms and conditions, features, support, pricing, and service options subject to change without notice.</p>
				</div>
				<div class="right">
					<ul>
						<li><a href="#">Legal</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Security</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="modal fade register-form" id="register-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="register-form-content">
					<div class="left">
						<span class="close" data-dismiss="modal"></span>
					</div>
					<div class="right">
						<div class="text1">Form đăng ký 2h trải nghiệm học lập trình miễn phí</div>
						<div class="text2">Hour of Code - Kids can code</div>
						<form class="register">
							<div class="form-group">
								<label>Tên phụ huynh đăng ký <i class="text-danger">*</i></label>
								<input type="text" class="form-control"/>
							</div>
							<div class="form-group phone-number focus">
								<label>Điện thoại liên hệ của phụ huynh <i class="text-danger">*</i></label>
								<div class="form-inline">
									<input type="tel" class="form-control" value="+84"/>
									<input type="tel" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label>E-Mail của phụ huynh <i class="text-danger">*</i></label>
								<input type="email" class="form-control"/>
							</div>
							<div class="form-group">
								<label>Link tài khoản Facebook của phụ huynh</label>
								<input type="text" class="form-control"/>
							</div>
							<div class="form-group">
								<label>Tên của học sinh muốn đăng ký <i class="text-danger">*</i></label>
								<input type="text" class="form-control"/>
							</div>
							<div class="form-group birthday focus">
								<label>Ngày tháng năm sinh <i class="text-danger">*</i></label>
								<div class="form-inline">
									<select class="form-control">
										<option selected disabled>Ngày</option>
										<option>2</option>
									</select>
									<select class="form-control">
										<option selected disabled>Tháng</option>
										<option>2</option>
									</select>
									<select class="form-control">
										<option selected disabled>Năm</option>
										<option>2</option>
									</select>
								</div>
							</div>
							<div class="btn-box">
								<button type="submit" class="btn btn-default" data-dismiss="modal">Đăng ký học thử</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $foxtail_options['footer-code'] ?>

<?php wp_footer(); ?>

</body>
</html>
