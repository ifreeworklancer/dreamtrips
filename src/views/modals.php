<div class="modal modal-participate">
	<div class="modal-header">
		<div class="close-modal">
			<div class="line line--left"></div>
			<div class="line line--right"></div>
		</div>
	</div>
	<div class="modal-body">
		<h3 class="modal-body__title mb-4">
			Хочу участвовать
		</h3>
		<form id="form-participate" method="post" action="/send.php">
			<div class="form-row d-flex flex-column align-items-center">
				<div class="form-group mb-4">
					<label for="user-name--participate" class="label-placeholder">
						Ваше имя
					</label>
					<input type="text" name="name" class="form-control" id="user-name--participate"
						   placeholder="Введите ваше имя"
						   required>
				</div>
				<div class="form-group mb-4">
					<label for="user-email--participate" class="label-placeholder">
						Ваш Еmail
					</label>
					<input type="email" name="email" class="form-control" id="user-email--participate"
						   placeholder="Введите EMAIL" required>
				</div>
				<div class="form-group mb-4">
					<label for="user-phone--participate" class="label-placeholder">
						Номер вашего телефона
					</label>
					<input type="tel" name="phone" class="form-control" id="user-phone--participate"
						   placeholder="Введите Номер" required>
				</div>
			</div>
			<div class="warranty mb-3">
				Гарантия низкой цены - найдете такой же тур дешевле у любого другого
				тур оператора,
				на такие же даты, то Вы полетите бесплатно!
			</div>
			<div class="text-center">
				<button class="btn btn-primary">
					ХОЧУ УЧАСТВОВАТЬ
				</button>
			</div>
		</form>
	</div>
</div>

<div class="modal modal-packages modal-packages--gold">
	<div class="modal-header">
		<div class="close-modal">
			<div class="line line--left"></div>
			<div class="line line--right"></div>
		</div>
	</div>
	<div class="modal-body">
		<h3 class="modal-body__title mb-4">
			Вы выбрали паКЕТ “Gold”
		</h3>
		<form id="form-packages--gold" action="/send.php" method="post">
            <input type="hidden" name="package" value="Пакет «Gold»">
			<div class="form-row d-flex flex-column align-items-center">
				<div class="form-group mb-4">
					<label for="user-name--packages--gold" class="label-placeholder">
						Ваше имя
					</label>
					<input type="text" name="name" class="form-control" id="user-name--packages--gold"
						   placeholder="Введите ваше имя" required>
				</div>
				<div class="form-group mb-4">
					<label for="user-email--packages--gold" class="label-placeholder">
						Ваш Еmail
					</label>
					<input type="email" name="email" class="form-control" id="user-email--packages--gold"
						   placeholder="Введите EMAIL" required>
				</div>
				<div class="form-group mb-4">
					<label for="user-phone--packages--gold" class="label-placeholder">
						Номер вашего телефона
					</label>
					<input type="tel" name="phone" class="form-control" id="user-phone--packages--gold"
						   placeholder="Введите Номер" required>
				</div>
			</div>
			<div class="text-center">
				<button class="btn btn-primary">
					Перейти к оплате
				</button>
			</div>
		</form>
	</div>
</div>

<div class="modal modal-packages modal-packages--platinum">
	<div class="modal-header">
		<div class="close-modal">
			<div class="line line--left"></div>
			<div class="line line--right"></div>
		</div>
	</div>
	<div class="modal-body">
		<h3 class="modal-body__title mb-4">
			Вы выбрали паКЕТ “Platinum”
		</h3>
		<form id="form-packages--platinum" action="/send.php" method="post">
            <input type="hidden" name="package" value="Пакет «Platinum»">
			<div class="form-row d-flex flex-column align-items-center">
				<div class="form-group mb-4">
					<label for="user-name--packages--platinum" class="label-placeholder">
						Ваше имя
					</label>
					<input type="text" name="name" class="form-control" id="user-name--packages--platinum"
						   placeholder="Введите ваше имя" required>
				</div>
				<div class="form-group mb-4">
					<label for="user-email--packages--platinum" class="label-placeholder">
						Ваш Еmail
					</label>
					<input type="email" name="email" class="form-control" id="user-email--packages--platinum"
						   placeholder="Введите EMAIL" required>
				</div>
				<div class="form-group mb-4">
					<label for="user-phone--packages--platinum" class="label-placeholder">
						Номер вашего телефона
					</label>
					<input type="tel" name="phone" class="form-control" id="user-phone--packages--platinum"
						   placeholder="Введите Номер" required>
				</div>
			</div>
			<div class="text-center">
				<button class="btn btn-primary">
					Перейти к оплате
				</button>
			</div>
		</form>
	</div>
</div>

<div class="modal-mask"></div>