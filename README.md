The test task assumes that you are either familiar with, or can quickly get acquainted with, the static code analysis tool **Psalm**.

Several code snippets will be presented, where you will be asked to fix the indicated errors.

It is expected that only **PHPDoc** comments should be added or modified; however, if you believe a more elegant or the only solution requires changing the code, it is permissible. Also, please avoid using the `@var` and `@psalm-suppress` annotations, unless otherwise stated.
Additionally, please describe what the problem was, what you added, and its purpose.
It doesn't matter how many tasks you manage to solve, what matters is that you give it a try.

You can use the sandbox at https://psalm.dev/ to check your results or install Psalm locally — https://packagist.org/packages/vimeo/psalm. A link to the solution in the Psalm sandbox would be greatly appreciated.

**Please do not fork the repository on GitHub**, as this may make your solution visible in the list of forks on the repository page. Instead, create your own private repository and share access to it with the repository owner's account where the test task is located. Alternatively, you can provide an archive with a local copy containing all necessary changes.

All tasks can be solved in a single commit or in different commits, according to your preference. However, adding the tasks as they are provided in the source and solving the tasks should be done in separate commits.

### Issue 1: 
The following code generates the errors: `MixedAssignment`, `MixedPropertyFetch`, `MixedArgument`.
Please add the necessary docblocks to resolve these issues.
https://github.com/hlib-kuznetsov/infuse-evaluation/blob/dd25de3180a18f58742fba5e53dae7bcac85803e/issues/issue1.php#L1-L22

### Issue 2: 
The following code generates the errors: `PossiblyUndefinedStringArrayOffset`, `MixedAssignment`, `MixedPropertyFetch`, `MixedArgument`.
Please add the necessary docblocks to resolve these issues.
https://github.com/hlib-kuznetsov/infuse-evaluation/blob/dd25de3180a18f58742fba5e53dae7bcac85803e/issues/issue2.php#L1-L29

### Issue 3: 
Please help Psalm understand the types of the variables `$object` and `$value`. `@psalm-trace` should display the type of the value passed to the function instantiate.
If necessary, you may suppress other errors.
https://github.com/hlib-kuznetsov/infuse-evaluation/blob/dd25de3180a18f58742fba5e53dae7bcac85803e/issues/issue3.php#L1-L32

### Issue 4: 
Help Psalm ensure that the elements passed in the array to the model implementation's constructor match the types of the model's properties. Psalm should notify if a value for any of the properties is not provided in $data, if a value of the incorrect type is provided, and, optionally, it would be a nice enhancement if it could also react to extra values for which the model has no properties. The properties-of utility, described here https://psalm.dev/docs/annotating_code/type_syntax/utility_types/ , might be helpful for this.
https://github.com/hlib-kuznetsov/infuse-evaluation/blob/dd25de3180a18f58742fba5e53dae7bcac85803e/issues/issue4.php#L1-L45

### Issue 5: 
Despite the fact that PHP doesn't have generics, Psalm provides such a possibility. Therefore, it would be very convenient to understand that the `BooksRepository` operates with objects of the `Book` class, and the `AuthorsRepository` operates with objects of the `Author` class, without having to implement a specific `get` method for each of the repository classes. You may suppress any errors except those indicating that Psalm doesn't understand the types of the `$book` and `$author` variables, as well as any errors related to accessing their properties or concerning their types. `@psalm-trace` should output the correct type for the `$book` and `$author` variables.
https://github.com/hlib-kuznetsov/infuse-evaluation/blob/dd25de3180a18f58742fba5e53dae7bcac85803e/issues/issue5.php#L1-L52
