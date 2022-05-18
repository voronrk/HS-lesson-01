<form class="form" method="POST" action="result.php">

<div class="field is-grouped">

<div class="field">
  <label class="label">Формат</label>
  <div class="select">
  <select>
    <option>А3</option>
    <option>А4</option>
    <option>А5</option>
  </select>
</div>
</div>

<div class="field pl-4">
  <label class="label">Тираж</label>
  <div class="control">
    <input class="input" type="number" placeholder="Тираж">
  </div>
</div>

<div class="field pl-4">
  <label class="label">Бумага</label>
  <div class="select">
  <select>
    <option>Офсетная</option>
    <option>Мелованная</option>
    <option>Дизайнерская</option>
  </select>
</div>
</div>
</div>

<div class="field">
  <button class="button" type="submit">Рассчитать</button>
</div>

</form>