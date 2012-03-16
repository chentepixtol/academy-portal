<?php


/**
 * This class adds structure of 'wiki' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sun Jan 17 14:57:29 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class WikiMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.WikiMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(WikiPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(WikiPeer::TABLE_NAME);
		$tMap->setPhpName('Wiki');
		$tMap->setClassname('Wiki');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('MATERIA_ID', 'MateriaId', 'INTEGER', 'materia', 'ID', true, null);

		$tMap->addForeignKey('PROFESOR_ID', 'ProfesorId', 'INTEGER', 'sf_guard_user', 'ID', true, null);

		$tMap->addColumn('TITULO', 'Titulo', 'VARCHAR', false, 150);

		$tMap->addColumn('TEXTO', 'Texto', 'LONGVARCHAR', false, null);

		$tMap->addColumn('FECHA', 'Fecha', 'DATE', false, null);

	} // doBuild()

} // WikiMapBuilder