<?php


/**
 * This class adds structure of 'aviso' table to 'propel' DatabaseMap object.
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
class AvisoMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AvisoMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(AvisoPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(AvisoPeer::TABLE_NAME);
		$tMap->setPhpName('Aviso');
		$tMap->setClassname('Aviso');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('TITULO', 'Titulo', 'VARCHAR', false, 150);

		$tMap->addColumn('TEXTO', 'Texto', 'LONGVARCHAR', false, null);

		$tMap->addColumn('ACTIVO', 'Activo', 'BOOLEAN', false, null);

		$tMap->addColumn('FECHA', 'Fecha', 'DATE', false, null);

		$tMap->addColumn('SLUG', 'Slug', 'VARCHAR', false, 150);

	} // doBuild()

} // AvisoMapBuilder
