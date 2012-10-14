{*admin_department.tpl*}
{load_presentation_object filename="admin_departments" assign="obj"}

<h3> Add a new department </h3>

<form method="post" action="{$obj -> mLinkToDepartmentAdmin}">
	<input type="text" name="department_name" size="30" /> NAME <br/>
	<select name="department_parent">
		<option value="0"> self </option>
		{section name=i loop=$obj->current_departments}
		<option value="{$obj -> current_departments[i].department_id}" > {$obj -> current_departments[i].department_name} </option>
		{/section}
	</select>
	<input type="submit" name="add_department" value="submit" />
</form>