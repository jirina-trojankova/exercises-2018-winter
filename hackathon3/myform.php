<?php
class myform
{
	public $action = '';
	public $method = 'POST';
	public $fields = [];
	public $object = null;
	
	public function __construct(pdo_table $object)
	{
		$this->setObject($object);
	}
	
	public function setObject(pdo_table $object)
	{
		$this->object = $object;
	}
	
	public function addField($name, $label, $filter = FILTER_DEFAULT)
	{
		$error = false;
		$this->fields[] = compact('name', 'label', 'filter', 'error');
	}
	
	public function __toString()
	{
		return (string) $this->printForm();
	}
	
	public function printForm()
	{
		?>
		<form method="<?php echo $this->method ?>" action="<?php echo $this->action ?>">
			<input type="hidden" name="id" value="<?php echo $this->object->id ?>">
			<?php foreach ($this->fields as $field): ?>
			<label><?php echo $field['label'] ?>
				<input type="text" name="record[<?php echo $field['name'] ?>]" value="<?php echo htmlspecialchars($this->object->__get($field['name'])) ?>">
			</label>
			<br>
			<?php endforeach; ?>
			<input type="submit" value="Save" />
		</form>
<?php
	}
	
	public function validate($record)
	{
		$type = $this->method == 'POST' ? INPUT_POST : INPUT_GET;
		$result = true;
		foreach ($this->fields as $i => $field) {
			$value = filter_var($record[$field['name']], $field['filter']);
			if ($value == '') {
				$result = false;
				$this->fields[$i]['error'] = true;
			}
		}
		
		return $result;
	}
}