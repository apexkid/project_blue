{*departments_list.tpl*}
{load_presentation_object filename = "departments_list" assign = "obj"}

{*start*}

<div id="navbar" class="ddsmoothmenu-v">
	
	<ul>

		{* Loop through the list of departments *}
		{section name = i  loop = $obj -> mDepartments}
			{assign var=selected  value=""}

			{* Verify if the department is selected to decide what CSS style to use *}
			{if ($obj -> mSelectedDepartment == $obj -> mDepartments[i].department_id)}
				{assign var=selected  value = "class=\"selected\""}
			{/if}
			<li>
				{* Generate a link for a new department in the list *}
				
				<a {$selected} href="{$obj -> mDepartments[i].link_to_department}">
					{$obj -> mDepartments[i].department_name} {* department_name is a field in the department tables *}
				</a>
				
				<ul>
					{section name=j loop= $obj-> mCategories}
						{assign var=selected value=""}
						{if ($obj -> mSelectedCategory == $obj -> mCategories[j].department_id)}
							{assign var=selected  value = "class=\"selected\""}
						{/if}

						{if ($obj -> mCategories[j].department_parent_id == $obj -> mDepartments[i].department_id)}							
							<li> 
								<a {$selected} href="{$obj -> mCategories[j].link_to_category}">
								{$obj -> mCategories[j].department_name}
								</a>
							</li>
						{/if}
					{/section}
				</ul>
				
				
			</li>

		{/section}
	
	</ul>
</div>

{*end*}